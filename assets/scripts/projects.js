// Declaration of types for the elements of the page necessary to display the projects
const projectsButtons = document.querySelectorAll(".button--project");
const projectsError = document.querySelector(".projects__error");
const projectsList = document.querySelectorAll(".projects__list");
const projectsSites = document.querySelector(".projects__sites");
const projectsModules = document.querySelector(".projects__modules");
const projectsTools = document.querySelector(".projects__tools");
// Retrieving the project list from the API.
fetch("https://api.github.com/users/sebastien-d-me/repos")
    .then(function (response) {
    if (response.status !== 403) {
        return response.json();
    }
    else {
        console.clear();
        return "Error";
    }
})
    .then((response) => {
    // Check the response
    if (response !== "Error") {
        // Random sorting of projects
        const allProjects = response.sort(() => 0.5 - Math.random());
        // Adding projects to the page
        addProjects(allProjects);
    }
    else {
        // Displays the error message conditionally
        projectsError.classList.add("show");
    }
});
// Function to add projects to the page    
const addProjects = (projects) => {
    projects.forEach(project => {
        // Retrieving the README.md file of the project on GitHub
        fetch(`https://raw.githubusercontent.com/sebastien-d-me/${project.name}/main/README.md`)
            .then(response => response.text())
            .then(txt => {
            // Retrieve the URL of the project preview image (if it exists)
            const ogImageRegex = /<meta\s+property="og:image"\s+content="([^"]+)">/;
            const ogImageMatch = txt.match(ogImageRegex);
            let projectImage;
            if (ogImageMatch) {
                projectImage = ogImageMatch[1];
            }
            // Creation of the HTML element representing the project
            const projectDiv = document.createElement("div");
            projectDiv.classList.add("project");
            const projectName = project.name.split("-").join(" ");
            const projectPreview = projectImage !== undefined ? `<img alt="${projectName}" class="project__image" src=${projectImage}>` : `<span class="project__name">${projectName}</span>`;
            const projectDate = new Date(project.created_at).toLocaleDateString("fr");
            const projectHomepage = project.homepage !== "" ? `<a class="link" href="${project.homepage}">See the website</a>` : "";
            const projectTemplate = `
                <div class="project__preview">
                    ${projectPreview}
                </div>
                <div class="project__content">
                    <div class="project__header">
                        <span class="project__name">${projectName}</span>
                        <span class="project__date">Created on ${projectDate}</span>
                    </div>
                    <div class="project__main">
                        <p class="project__description">
                            ${project.description}
                        </p>
                    </div>
                    <div class="project__footer">
                        <a class="link" href="${project.html_url}">See the repository</a>
                        ${projectHomepage}
                    </div>
                </div>`;
            projectDiv.innerHTML = projectTemplate;
            // Add the project to the corresponding section (sites, modules or tools)
            switch (true) {
                case project.topics.includes("sites"):
                    projectsSites.appendChild(projectDiv);
                    break;
                case project.topics.includes("modules"):
                    projectsModules.appendChild(projectDiv);
                    break;
                case project.topics.includes("tools"):
                    projectsTools.appendChild(projectDiv);
            }
        });
    });
};
const manageProjects = (category) => {
    projectsButtons.forEach(button => {
        button.classList.add("button--secondary");
    });
    projectsList.forEach(list => {
        list.classList.add("hide");
    });
    switch (category) {
        case "sites":
            projectsButtons[0].classList.remove("button--secondary");
            projectsSites.classList.remove("hide");
            break;
        case "modules":
            projectsButtons[1].classList.remove("button--secondary");
            projectsModules.classList.remove("hide");
            break;
        case "tools":
            projectsButtons[2].classList.remove("button--secondary");
            projectsTools.classList.remove("hide");
            break;
        default:
            break;
    }
};
manageProjects("sites");
// Management of the click on the project category selection buttons
projectsButtons.forEach(button => {
    button.addEventListener("click", (event) => {
        const category = event.target.getAttribute("data-category");
        manageProjects(category);
    });
});
