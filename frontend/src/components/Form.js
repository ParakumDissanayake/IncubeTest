import React, { Component } from "react";

class Form extends Component {

    constructor() {
        super();
        this.state = {
          name: "React"
        };
        this.onChangeValue = this.onChangeValue.bind(this);
      }
    
      onChangeValue(event) {
        console.log(event.target.value);
      }

    render() {
        return(
            <form className="ui form" >
                <div className="fields">
                    <div className="five wide field">
                      <p> Style No </p>
                      <input type="text" name="style_No" placeholder="Style No" />
                    </div>

                    <div className="five wide field">
                      <p> Style Name </p>
                      <input type="text" name="style_Name" placeholder="Style Name" />
                    </div>

                </div>
                
                <div className="fields">
                <div  className= "five wide field" onChange={this.onChangeValue}>
                      <p> Style Status </p>
                      <input type="radio" value="Active" name="Active" /> Active
                      <input type="radio" value="Inactive" name="Inactive" /> Inactive
                      <input type="radio" value="Hold" name="Hold" /> Hold
                    </div>

                    <div className="five wide field">
                      <p> Style Qty </p>
                      <input type="text" name="style_Qty" placeholder="Style Qty" />
                    </div> 
                </div>       
            </form>
        );
    }
}

export default Form;