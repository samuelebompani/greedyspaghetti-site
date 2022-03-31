import React from 'react';
import logo from './logo.svg';
import './App.css';
import Navbar from './components/Navbar';

function App() {
  return (
    <div className="App">
      <link href="/dist/App.css" rel="stylesheet"></link>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"></link>
      
      <header className="App-header">
        <Navbar></Navbar>
      </header>
    </div>
  );
}

export default App;
