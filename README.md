# Информация о компании

Вывод информации о компании

```php
/api/company-info
```

### JSON ответ

```json
{
    "data": {
        "company_name": "",
        "site_name": "",
        "phone": null,
        "email": "mail@mail.mail",
        "slogan": "",
        "postal_code": "",
        "address_country": "",
        "address_region": "",
        "address_locality": "",
        "street_address": "",
        "logotype": null,
        "phones": [
            ""
        ],
        "addresses": [
            ""
        ],
        "working_time": {
            "week": {
                "monday": {
                    "active": 1,
                    "min": "09:00",
                    "max": "18:00"
                },
                "tuesday": {
                    "active": 1,
                    "min": "09:00",
                    "max": "18:00"
                },
                "wednesday": {
                    "active": 1,
                    "min": "09:00",
                    "max": "18:00"
                },
                "thursday": {
                    "active": 1,
                    "min": "09:00",
                    "max": "18:00"
                },
                "friday": {
                    "active": 1,
                    "min": "09:00",
                    "max": "18:00"
                },
                "saturday": {
                    "active": 0,
                    "min": "09:00",
                    "max": "18:00"
                },
                "sunday": {
                    "active": 0,
                    "min": "09:00",
                    "max": "18:00"
                }
            },
            "holidays": {
                "saturday": {
                    "active": 0
                },
                "sunday": {
                    "active": 0
                },
                "holidays": {
                    "active": 0
                }
            }
        }
    }
}
```
