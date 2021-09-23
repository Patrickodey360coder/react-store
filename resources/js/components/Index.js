import React from 'react';
import {BrowserRouter as Router, Switch, Route, Link} from 'react-router-dom'
import Contact from '../pages/Contact'
import About from '../pages/About'
import Home from '../pages/Home'
// import Nav from './Nav';

function Index() {
    return (
            <Router>
                <Switch>
                    <Route path="/" component={Home}/>
                    <Route path="/about" component={About}/>
                    <Route path="/contact" component={Contact}/>

                </Switch>
            </Router>
    );
}

export default Index;


