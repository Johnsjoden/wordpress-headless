
import './App.css';
import {Route, Routes} from "react-router-dom"
import BookPage from './pages/BookPage';
import BookDetailPage from './pages/BookDetailPage';
function App() {
  return (
    <div className="App">
      <Routes>
        <Route path="/book" element={<BookPage />}/>
        <Route path="/book/:id" element={<BookDetailPage />}/>
      </Routes>
    </div>
  );
}

export default App;
