import React from "react";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import { ToastContainer } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";
import HomePage from "./pages/HomePage";

const Base: React.FC = () => {
    return (
        <React.Fragment>
            {/* Notification Toast Container */}
            <ToastContainer />
            {/* Same as */}
            <ToastContainer />
            {/* Browser Router */}
            <BrowserRouter>
                <Routes>
                    <Route index path="/" element={<HomePage />} />
                </Routes>
            </BrowserRouter>
        </React.Fragment>
    );
};

export default Base;
