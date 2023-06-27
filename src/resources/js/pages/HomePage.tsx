import React from "react";
import Hero from "../components/Hero";
import BasePage from "./BasePage";
import StatisticsBar from "../components/statistics/StatisticsBar";
import PropertyGrid from "../components/property/PropertyGrid";
import TwoColumn from "../components/layout/TwoColumn";
import TopAgentGrid from "../components/agent/TopAgentGrid";
import Card from "../components/card/Card";
import CardTitle from "../components/card/CardTitle";
import CardBody from "../components/card/CardBody";

const HomePage: React.FC = () => {
    return (
        <BasePage>
            <Hero />
            <StatisticsBar />
            <TwoColumn
                columnOne={{
                    children: <PropertyGrid />,
                }}
                columnTwo={{
                    children: (
                        <Card>
                            <CardTitle title="Top Agents" />
                            <CardBody>
                                <TopAgentGrid />
                            </CardBody>
                        </Card>
                    ),
                }}
            />
        </BasePage>
    );
};

export default HomePage;
