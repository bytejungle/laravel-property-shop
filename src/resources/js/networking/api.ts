import axios, { AxiosResponse } from "axios";

export interface StatisticsApiResponse {
    data: {
        properties: number;
        countries: number;
        agents: number;
    }
}

export default class Api {

    public static STATUS_OK: number = 200;

    public static async getStatistics(): Promise<AxiosResponse<StatisticsApiResponse> | undefined> {

        return await axios.get(`/api/statistics`);

    }

}
