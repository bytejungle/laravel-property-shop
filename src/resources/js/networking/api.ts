import axios, { AxiosResponse } from "axios";

export interface RequestOptions {
    page?: number;
}

export interface StatisticsApiResponse {
    data: {
        properties: number;
        countries: number;
        agents: number;
    };
}

export interface PropertiesApiResponse {
    data: Array<Property>;
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

export default class Api {
    public static STATUS_OK: number = 200;

    public static async getStatistics(): Promise<
        AxiosResponse<StatisticsApiResponse> | undefined
    > {
        return await axios.get(`/api/statistics`);
    }

    public static async getProperties(
        requestOptions: RequestOptions
    ): Promise<AxiosResponse<PropertiesApiResponse> | undefined> {
        return await axios.get(`/api/properties?page=${requestOptions.page}`);
    }
}
