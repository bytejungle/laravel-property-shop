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

export interface PropertyFilter {
    country?: number;
    bedroomCount?: number;
    bathroomCount?: number;
    carSpaceCount?: number;
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
        requestOptions: RequestOptions,
        propertyFilter: PropertyFilter
    ): Promise<AxiosResponse<ArrayApiResponse<Property>> | undefined> {
        let url = `/api/properties?page=${requestOptions.page}`;

        // apply filters where applicable
        if (propertyFilter.country) {
            url += `&country=${propertyFilter.country}`;
        }

        if (propertyFilter.bedroomCount) {
            url += `&bedroom_count=${propertyFilter.bedroomCount}`;
        }

        if (propertyFilter.bathroomCount) {
            url += `&bathroom_count=${propertyFilter.bathroomCount}`;
        }

        if (propertyFilter.carSpaceCount) {
            url += `&car_count=${propertyFilter.carSpaceCount}`;
        }

        return await axios.get(url);
    }

    public static async getCountries(
        getAll: Boolean
    ): Promise<AxiosResponse<ArrayApiResponse<Country>> | undefined> {
        let url = `/api/countries`;

        if (getAll) {
            url += `?all=1`;
        }

        return await axios.get(url);
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
