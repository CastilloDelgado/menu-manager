type ID = string;

interface Section {
    id: ID;
    name: string;
    description: string;
    active: boolean;
    items: Item[];
}

interface Item {
    id: ID;
    name: string;
    description: string;
    price: Number;
    active: boolean;
    variants: Variant[];
}

interface Variant {
    id: ID;
    name: string;
    description: string;
    price: Number;
    active: boolean;
}
