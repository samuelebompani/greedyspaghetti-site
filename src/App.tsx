import './App.css';
import Navbar from './components/Navbar';
import { BrowserRouter, Route, Routes } from 'react-router-dom'
import RandomRoute from './routes/Random.route';
import HomeRoute from './routes/Home.route';
import Footer from './components/Footer';

import EuroMascotte from './routes/EuroMascotte.route';
import SandBoxRoute from './routes/SandBox.route';
import AboutRoute from './routes/About.route';

function App() {
  return (
    <div className="App md:px-12 xl:px-72 min-h-screen grid content-between w-full">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"></link>
      <link rel="preconnect" href="https://fonts.googleapis.com"></link>
      <link rel="preconnect" href="https://fonts.gstatic.com"></link>

      <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet"></link>
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet"></link>

      <Navbar></Navbar>
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<HomeRoute />} />
          <Route path="/random" element={<RandomRoute />} />
          <Route path="/euro-mascotte" element={<EuroMascotte />} />
          <Route path="/sandbox" element={<SandBoxRoute />} />
          <Route path="/about" element={<AboutRoute />} />
          <Route path="*" element={<h2 className="text-2xl text-secondary">404 Page not found</h2>} />

        </Routes>
      </BrowserRouter>
      <Footer text="© 2022 Copyright: Greedy Spaghetti"/>
    </div>
  );
}

export default App;
