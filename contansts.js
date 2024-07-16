const MENU = {
    pages: [
        {
            title: "Comida",
            sections: [
                {
                    title: "Entradas",
                    elements: [
                        {
                            title: "Papas Carajas",
                            description:
                                "Papitas cambray salteadas y guisadas acompañadas de salsa picosita.",
                            price: 70,
                        },
                        {
                            title: "Guacamole",
                            description:
                                "Con jitomate, cebolla y cilantro picaditos, servido con totopos.",
                            price: 95,
                        },
                        {
                            title: "Tostadita",
                            description:
                                "Servida con cebolla morada, aguacate y salsitas negras",
                            price: null,
                            variants: [
                                {
                                    title: "Atún fresco",
                                    description: "",
                                    price: 65,
                                },
                                {
                                    title: "Camarón cocido",
                                    description: "",
                                    price: 55,
                                },
                                {
                                    title: "Ceviche",
                                    description: "",
                                    price: 45,
                                },
                            ],
                        },
                        {
                            title: "Papas doradas",
                            description:
                                "Preparadas con tu salsa favorita de la casa.",
                            price: 40,
                        },
                        {
                            title: "Hueva",
                            description:
                                "Orden servida con aguacate y totopos, pa’ disfrutar agusto.",
                            price: null,
                            variants: [
                                {
                                    title: "Orden",
                                    description: "",
                                    price: 85,
                                },
                                {
                                    title: "Tostada",
                                    description: "",
                                    price: 25,
                                },
                            ],
                        },
                        {
                            title: "Ceviche",
                            description:
                                "Mezcla de jitomate, cebolla, cilantro, pepino, zanahoria, preparado con salsas y pescado ó camarón.",
                            price: null,
                            variants: [
                                {
                                    title: "Grande",
                                    description: "",
                                    price: 165,
                                },
                                {
                                    title: "Chico",
                                    description: "",
                                    price: 115,
                                },
                            ],
                        },
                        {
                            title: "Coctél",
                            description:
                                "Algo suave pa’ sobrevivir el fin de semana. Con su verdurita y todo",
                            price: null,
                            variants: [
                                {
                                    title: "Grande",
                                    description: "",
                                    price: 155,
                                },
                                {
                                    title: "Chico",
                                    description: "",
                                    price: 105,
                                },
                            ],
                        },
                        {
                            title: "Tacos gobernador",
                            description:
                                "Taquitos de camarón con queso, servidos en orden de 3.",
                            price: 120,
                        },
                    ],
                },
                {
                    title: "Aguachiles",
                    elements: [
                        {
                            title: "El chévere",
                            description:
                                "Explosión de frutas tropicalonas (fresa, mango y piña) con chilito de árbol, dulzón, picosito y delicioso.",
                            price: null,
                            variants: [
                                {
                                    title: "Grande",
                                    description: "",
                                    price: 180,
                                },
                                {
                                    title: "Chico",
                                    description: "",
                                    price: 120,
                                },
                            ],
                        },
                        {
                            title: "El chillón",
                            description:
                                "Preparado con chile de semillas del mismísimo Chile Chillón.",
                            price: null,
                            variants: [
                                {
                                    title: "Grande",
                                    description: "",
                                    price: 180,
                                },
                                {
                                    title: "Chico",
                                    description: "",
                                    price: 120,
                                },
                            ],
                        },
                        {
                            title: "El toreado",
                            description:
                                "Tomate verde y mezcla de chiles toreados al comal, muy chido",
                            price: null,
                            variants: [
                                {
                                    title: "Grande",
                                    description: "",
                                    price: 165,
                                },
                                {
                                    title: "Chico",
                                    description: "",
                                    price: 105,
                                },
                            ],
                        },
                        {
                            title: "El ingrato",
                            description:
                                "Naranjita con un poco de habanero tatemado y un chingo de sabor.",
                            price: null,
                            variants: [
                                {
                                    title: "Grande",
                                    description: "",
                                    price: 165,
                                },
                                {
                                    title: "Chico",
                                    description: "",
                                    price: 105,
                                },
                            ],
                        },
                        {
                            title: "El bravo",
                            description:
                                "Aguachilito rojo con chile de árbol, especias y untoque perrón.",
                            price: null,
                            variants: [
                                {
                                    title: "Grande",
                                    description: "",
                                    price: 165,
                                },
                                {
                                    title: "Chico",
                                    description: "",
                                    price: 105,
                                },
                            ],
                        },
                        {
                            title: "El chingón",
                            description:
                                "Deliciosa mezcla de chilito serrano y habanero, bien chingón.",
                            price: null,
                            variants: [
                                {
                                    title: "Grande",
                                    description: "",
                                    price: 165,
                                },
                                {
                                    title: "Chico",
                                    description: "",
                                    price: 105,
                                },
                            ],
                        },
                        {
                            title: "El prieto",
                            description:
                                "Preparado con salsita negra de la casa, chipotle y chingos de amor",
                            price: null,
                            variants: [
                                {
                                    title: "Grande",
                                    description: "",
                                    price: 165,
                                },
                                {
                                    title: "Chico",
                                    description: "",
                                    price: 105,
                                },
                            ],
                        },
                        {
                            title: "El valiente",
                            description:
                                "Exclusivo para valientes. Preparado BIEN picoso con salsita de habanero de la casa.",
                            price: null,
                            variants: [
                                {
                                    title: "Grande",
                                    description: "",
                                    price: 165,
                                },
                                {
                                    title: "Chico",
                                    description: "",
                                    price: 105,
                                },
                            ],
                        },
                    ],
                },
            ],
        },
        {
            title: "Bebidas",
            sections: [
                {
                    title: "Cerveza",
                    elements: [
                        { title: "Corona", price: 35 },
                        { title: "Pacífico", price: 35 },
                        { title: "Strongbow", price: 40 },
                        { title: "Carta blanca", price: 25 },
                        { title: "Bohemia", price: 45 },
                        { title: "Modelo especial", price: 45 },
                        { title: "Negra Modelo", price: 45 },
                        { title: "Minerva Lager", price: 75 },
                        { title: "Cayaco", price: 75 },
                        { title: "Piedra lisa", price: 75 },
                        { title: "Cayaco", price: 75 },
                    ],
                },
                {
                    title: "Preparados",
                    elements: [
                        { title: "Michelada", price: 65 },
                        { title: "Clamato preparado", price: 35 },
                    ],
                },
                {
                    title: "Sin alcohol",
                    elements: [
                        { title: "Agua fresca", price: 25 },
                        { title: "Refresco", price: 25 },
                        { title: "Agua mineral", price: 25 },
                    ],
                },
            ],
        },
    ],
};

export default MENU;
