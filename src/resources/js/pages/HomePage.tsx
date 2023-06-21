import React from "react";
import Hero from "../components/Hero";
import BasePage from "./BasePage";
import StatisticsBar from "../components/StatisticsBar";
import PropertyGrid from "../components/PropertyGrid";
import TwoColumn from "../components/layout/TwoColumn";
import TopAgentGrid from "../components/TopAgentGrid";

const HomePage: React.FC = () => {
    return (
        <BasePage>
            <Hero />
            <StatisticsBar />
            <TwoColumn
                columnOne={{
                    title: "Properties",
                    children: <PropertyGrid />,
                }}
                columnTwo={{ title: "Top Agents", children: <TopAgentGrid /> }}
            />
        </BasePage>
    );
};

export default HomePage;
