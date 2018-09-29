import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Threadcard extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card" style="width: 18rem;">
                            <div className="card-header">Threadcard Component</div>

                            <div className="card-body">
                                <h5 className="card-title">title</h5>
		                // <span>Thread :</span><span>[-% $thread->user_id %-]</span>
		                // <span>[-% $thread->created_at %-]</span>
		                // <p className="card-text">Some quick threadcard text to build on the card title and make up the bulk of the cards content.</p>
                                // <a href="#" className="btn btn-primary">Go somewhere</a>
		           </div>
                        </div>
                   </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('threadcard')) {
    ReactDOM.render(<Threadcard />, document.getElementById('threadcard'));
//ReactDOM.render(<div>kokoga Header1</div>, document.getElementById('threadcard'));
}














// import React, { Component } from 'react';
// import ReactDOM from 'react-dom';

// export default class ThreadCard extends Component {
//     render() {
//         return (
// 		<div className="card" style="width: 18rem;">
// 		   <div className="card-body">
// 		      <h5 className="card-title">title</h5>
// 		      <span>Thread :</span><span>[-% $thread->user_id %-]</span>
// 		      <span>[-% $thread->created_at %-]</span>
// 		      <p className="card-text">Some quick threadcard text to build on the card title and make up the bulk of the cards content.</p>
//                       <a href="#" className="btn btn-primary">Go somewhere</a>
//                    </div>
//                 </div>
//         );
//     }
// }

// if (document.getElementById('cardv')) {
//     ReactDOM.render(<ThreadCard />, document.getElementById('cardv'));
// }

