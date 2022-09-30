export default class GSClient {
    baseUrl : string;

    constructor() {
        this.baseUrl = ""
    }

    async _get(path: string, params?: string) {
        let url = this.baseUrl + path;
        if (params !== null) {
            url += '?' + new URLSearchParams(params).toString();
        }
        const response = await fetch(url, {
            mode: 'cors',
            credentials: 'include'
        });
        if (response.status === 200) {
            return [response.status, await response.json()];
        }
        return [response.status, null];
    }
}