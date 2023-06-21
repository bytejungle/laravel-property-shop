import React from "react";
import { useState, useEffect } from "react";
import StatisticsBox from "./StatisticsBox";
import Api from "../networking/api";
import Spinner from "./Spinner";

const StatisticsBar: React.FC = () => {
    const [properties, setProperties] = useState<number>(0);
    const [countries, setCountries] = useState<number>(0);
    const [agents, setAgents] = useState<number>(0);
    const [isLoading, setIsLoading] = useState<Boolean>(false);

    useEffect(() => {
        setIsLoading(true);
        Api.getStatistics()
            .then((response) => {
                if (response && response.status === Api.STATUS_OK) {
                    setProperties(response.data.data.properties);
                    setCountries(response.data.data.countries);
                    setAgents(response.data.data.agents);
                }
            })
            .finally(setIsLoading(false));
    }, []);

    return (
        <React.Fragment>
            {/* Statistics Bar */}
            <div className="flex w-full p-5">
                {/* Total Listed Properties */}
                <div className="grid flex-grow bg-base-200">
                    <StatisticsBox
                        title={"⮞ Total Listed Properties"}
                        value={properties}
                        isLoading={isLoading}
                    />
                </div>
                <div className="divider divider-horizontal"></div>
                {/* Total Countries */}
                <div className="grid flex-grow bg-base-200">
                    <StatisticsBox
                        title={"⮞ Total Countries"}
                        value={countries}
                        isLoading={isLoading}
                    />
                </div>
                <div className="divider divider-horizontal"></div>
                {/* Total Agents */}
                <div className="grid flex-grow bg-base-200">
                    <StatisticsBox
                        title={"⮞ Total Agents"}
                        value={agents}
                        isLoading={isLoading}
                    />
                </div>
            </div>
        </React.Fragment>
    );
};

export default StatisticsBar;
