from flask import Flask, jsonify

app = Flask(__name__)

@app.route('/international-product')
def get_international_product():
    return jsonify(international_brands)


international_brands = [    {        "brand_name": "Nike",        "products": [            "Air Max 90",            "Air Jordan 1",            "React Infinity Run Flyknit"        ]
    },
    {
        "brand_name": "Adidas",
        "products": [
            "Ultra Boost",
            "Yeezy Boost 350",
            "NMD R1"
        ]
    },
    {
        "brand_name": "Puma",
        "products": [
            "Suede Classic",
            "RS-X",
            "Thunder"
        ]
    }
]

