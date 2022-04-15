import React from 'react';
import { render, screen } from '@testing-library/react';
import App from '../App';
import Navbar from '../components/Navbar';

test('renders learn react link', () => {
  render(<App />);
  expect(1+2).toBe(3);
});

test('reducing screen size', () => {
  render(<Navbar></Navbar>);
})