import './App.css';
import Navbar from './components/Navbar';
import { BrowserRouter, Route, Routes } from 'react-router-dom'
import RandomRoute from './routes/Random.route';
import HomeRoute from './routes/Home.route';

function App() {
  return (
    <div className="App bg-primary">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"></link>
      <Navbar></Navbar>
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<HomeRoute />} />
          <Route path="/random" element={<RandomRoute />} />
          <Route path="*" element={<h2 className="text-2xl text-secondary">404 Page not found</h2>} />

        </Routes>
      </BrowserRouter>
      
    </div>
  );
}

export default App;
