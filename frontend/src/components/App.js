import React, { Component } from "react";
// import axios from "axios";
import Form from "./Form";
import StyleTable from "./StyleTable";
import "./app.css";

class App extends Component {
//    state = {
//        stylemaster: [],
//        url: "http://127.0.0.1:8000/api/stylemaster"
//    };

//    getstylemaster = () =>{
//        const stylemaster = await axios.get(this.state.url);
//        this.setState({ stylemaster: stylemaster.data}); 
//    };
   
   
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

                 <StyleTable />
            </div>
        </div>
        );
    }
}

export default App;

