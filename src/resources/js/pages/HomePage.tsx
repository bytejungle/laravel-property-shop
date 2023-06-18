import React from "react";
import Hero from "../components/Hero";
import BasePage from "./BasePage";
import StatisticsBar from "../components/StatisticsBar";
import PropertyGrid from "../components/PropertyGrid";

const HomePage: React.FC = () => {

    return (
        <BasePage>
            <Hero />
            <StatisticsBar />
            <PropertyGrid />
        </BasePage>
    );
};

export default HomePage;
