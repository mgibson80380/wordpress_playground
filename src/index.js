import Nav from './scripts/components/Nav';
import TradingChart from './scripts/components/TradingChart';
import Projects from './scripts/components/Projects';

import React from 'react'
import ReactDOM from 'react-dom'

const firstComponent = document.querySelector("#navigation");
if(firstComponent) {
    ReactDOM.render( <Nav />, firstComponent )
}

const secondComponent = document.querySelector("#trading-chart");
if(secondComponent) {
    ReactDOM.render( <TradingChart />, secondComponent )
}

const projectComponent = document.querySelector("#projects");
if(projectComponent) {
    ReactDOM.render( <Projects />, projectComponent )
}
