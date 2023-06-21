import axios, { AxiosResponse } from "axios";

export interface RequestOptions {
    page?: number;
}

export interface TopAgentsApiResponse {
    data: {
        agents: Array<{ agent_id: number; count: number }>;
    };
}

export interface StatisticsApiResponse {
    data: {
        properties: number;
        countries: number;
        agents: number;
    };
}

export interface AgentApiResponse {
    data: Agent;
}

export interface ArrayApiResponse<Type> {
    data: Array<Type>;
}

export interface Property {
    id: number;
    country_id: number;
    agent_id: number;
    views: number;
    bedroom_count: number;
    bathroom_count: number;
    car_count: number;
    description: string;
    street_address: string;
    image_url: string;
    price: number;
    listed_at: Date;
    created_at: Date;
    updated_at: Date;
}

export interface Country {
    id: number;
    iso_3166_1_alpha_2: string;
    name: string;
    phone_code: number;
    created_at: Date;
    updated_at: Date;
}

export interface Agent {
    id: number;
    gender: string;
    first_name: string;
    last_name: string;
    mobile_number: string;
    email_address: string;
    image_url: string;
    last_seen_at: Date;
    created_at: Date;
    updated_at: Date;
}

export default class Api {
    public static STATUS_OK: number = 200;

    public static async getStatistics(): Promise<
        AxiosResponse<StatisticsApiResponse> | undefined
    > {
        return await axios.get(`/api/statistics`);
    }

    public static async getProperties(
        requestOptions: RequestOptions
    ): Promise<AxiosResponse<ArrayApiResponse<Property>> | undefined> {
        return await axios.get(`/api/properties?page=${requestOptions.page}`);
    }

    public static async getCountries(): Promise<
        AxiosResponse<ArrayApiResponse<Country>> | undefined
    > {
        return await axios.get(`/api/countries`);
    }

    public static async getTopAgents(): Promise<
        AxiosResponse<TopAgentsApiResponse> | undefined
    > {
        return await axios.get(`/api/agents/top`);
    }

    public static async getAgent(
        agentId: number
    ): Promise<AxiosResponse<AgentApiResponse> | undefined> {
        return await axios.get(`/api/agents/${agentId}`);
    }
}
