import React from "react";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import HomePage from "./pages/HomePage";

const Base: React.FC = () => {
    return (
        <BrowserRouter>
            <Routes>
                <Route index path="/" element={<HomePage />} />
            </Routes>
        </BrowserRouter>
    );
};

export default Base;
