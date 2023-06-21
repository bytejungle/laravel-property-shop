import React from "react";
import { useState, useEffect } from "react";
import Api from "../networking/api";
import AgentCard from "./AgentCard";

const TopAgentGrid: React.FC = () => {
    const [agentIds, setAgentsIds] = useState<Array<number>>([]);

    useEffect(() => {
        Api.getTopAgents().then((response) => {
            if (response && response.status === Api.STATUS_OK) {
                setAgentsIds(
                    response.data.data.agents.map((agent) => agent.agent_id)
                );
            }
        });
    }, []);

    return (
        <React.Fragment>
            {/* Property Grid */}
            <div className="columns-1">
                {agentIds.map((agentId, index) => {
                    return (
                        <div className="mb-5" key={index}>
                            <AgentCard agentId={agentId} />
                        </div>
                    );
                })}
            </div>
        </React.Fragment>
    );
};

export default TopAgentGrid;
