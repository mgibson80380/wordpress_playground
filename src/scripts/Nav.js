import React, { useEffect, useState } from 'react';


import { Link } from 'react-router-dom';

function Nav() {

    const [navigations, setNavigations] = useState([]);

    useEffect(() => {
        async function loadNavs() {
            const response = await fetch('/wp-json/wp/v2/menu');
            if(!response.ok) {
                // oups! something went wrong
                return;
            }
    
            const navs = await response.json();
            setNavigations(navs);
        }
    
        loadNavs();
   }, [])

    return (
        <nav className="Nav">
            <ul>
            {navigations.map(nav => (
                <Link to={nav.url}>
                    <li>{nav.title}</li>
                </Link>
            ))}
            </ul>
        </nav>
    );
}

export default Nav;
