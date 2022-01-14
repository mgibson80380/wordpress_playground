import Nav from './components/Nav';

import React from 'react';
// import { CoinProvider } from './CoinContext';
import { BrowserRouter as Router, Switch, Route } from 'react-router-dom';

function App() {
    return (
        <Router>
            <div className="App">
                <Nav />
                {/* <Switch>
                    <Route path="/about" component={About} />
                    <Route path="/crypto" exact component={Crypto} />
                    <Route path="/crypto/:symbol" component={CoinDataPage} />
                    <Route path="/todo" component={Todo} />
                </Switch> */}
                
            </div>
        </Router>
    );
}

export default App;
