import { IService } from "./service.interface"

export interface IProduct {
    id: string,
    name: string,
    image_url: string,
    barcode: string,
    sku: string,
    price: number,
    cost: number,
    services: IService[]
}