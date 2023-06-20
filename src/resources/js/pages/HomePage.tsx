import React from "react";
import Hero from "../components/Hero";
import BasePage from "./BasePage";
import StatisticsBar from "../components/StatisticsBar";
import PropertyGrid from "../components/PropertyGrid";
import TwoColumn from "../components/layout/TwoColumn";
import TopAgentGrid from "../components/TopAgentGrid";
import { useState } from "react";
import PropertyModal from "../components/PropertyModal";
import { Property } from "../networking/api";

const HomePage: React.FC = () => {
    const [selectedProperty, setSelectedProperty] =
        useState<Property>(undefined);

    const modalId = "modal";
    return (
        <BasePage>
            <Hero />
            <StatisticsBar />
            <TwoColumn
                columnOne={{
                    title: "Properties",
                    children: <PropertyGrid handler={setSelectedProperty} />,
                }}
                columnTwo={{ title: "Top Agents", children: <TopAgentGrid /> }}
            />

            {/* Modals */}
            <PropertyModal id={modalId} property={selectedProperty} />
        </BasePage>
    );
};

export default HomePage;
