import React, { useEffect, useState } from 'react';

function Projects() {
    const [projects, setProjects] = useState([]);

    useEffect(() => {
        async function loadProjects() {
            const response = await fetch('/wp-json/wp/v2/projects?filter[orderby]=date&order=desc');

            if(!response.ok) {
                return;
            }
    
            const projects = await response.json();
            console.log(projects);
            setProjects(projects);
        }
    
        loadProjects();
   }, [])

   return (
       <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
           {projects.map((project) => (
               <div className="relative h-72 bg-center bg-cover group transition duration-700 ease-in-out cursor-pointer rounded-lg shadow-xl shadow-gray-800" style={{ backgroundImage: `url(${project.fimg_url})` }} >
                   <div className="absolute w-full h-full opacity-0 group-hover:opacity-50 bg-gray-800 rounded-lg transition duration-700 ease-in-out text-white"></div>
                   <div className="absolute top-1/2 opacity-0 group-hover:opacity-100 transition duration-700 ease-in-out transform -translate-y-1/2 font-bold w-full text-center text-xl md:text-2xl lg:text-3xl text-white">{project.title.rendered}</div>
                </div>               
           ))}
       </div>
   );
}

export default Projects;