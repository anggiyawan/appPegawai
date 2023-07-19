import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';

import Nav from "./Nav";
import Form from "./user/Form";
import List from "./user/List";
import Edit from "./user/Edit";

class Main extends Component {
  render() {
    return (
      <Router>
        <main>
          <Nav />
          <Routes>
            <Route path="/pegawai/user/index" element={<List />} />
            <Route path="/pegawai/user/form" element={<Form />} />
            <Route path="/pegawai/user/edit/:id" element={<Edit />} />
          </Routes>
        </main>
      </Router>
    );
  }
}

ReactDOM.render(<Main />, document.getElementById('main-user'));
