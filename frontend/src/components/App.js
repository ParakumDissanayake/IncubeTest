import React, { Component } from "react";
import Form from "./Form";
import StyleTable from "./StyleTable";
import "./app.css";

class App extends Component {
    render() {
        return(
        <div>
            <div className="ui fixed inverted menu">
                <div className="ui container">
                    <a href="/#" className="header item">
                        INCUBE Style Master
                    </a>
                </div>
            </div>

            <div className="ui main container">
                <Form/>

                <StyleTable/>
            </div>
        </div>
        );
    }
}

export default App;

