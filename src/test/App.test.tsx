import { render, screen } from '@testing-library/react';
import App from '../App';
import Navbar from '../components/Navbar';

test('renders learn react link', () => {
  render(<App />);
});

test('reducing screen size', () => {
  render(<Navbar></Navbar>);
})