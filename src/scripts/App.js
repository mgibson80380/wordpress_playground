import Nav from './Nav';

import React from 'react';
// import { CoinProvider } from './CoinContext';
import { BrowserRouter as Router, Switch, Route } from 'react-router-dom';

function App() {
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
