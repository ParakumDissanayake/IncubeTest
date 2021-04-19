import React, { Component } from "react";

class StyleTable extends Component {
    render() {
        return (
            <div className="data">
                <table className="ui celled table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Category</th>
                            <th>Item Code</th>
                            <th>Consumption</th>
                            
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><input type="checkbox" name="" placeholder="" /></td>
                            <td></td>
                            <td></td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        );
    }

}

export default StyleTable;