---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Address management

Addresses are used across multiple different models, they just contain where a company/person/user is located
<!-- START_5da7a20af47ea2fbb72501d9366665c4 -->
## Display all addresses

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/addresses" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/addresses");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/addresses`


<!-- END_5da7a20af47ea2fbb72501d9366665c4 -->

<!-- START_7eb2193c8e19862cc14fcc136b7e26c7 -->
## Store a new address

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/addresses" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"organisation_name":"laudantium","line_1":"qui","line_2":"culpa","town":"quae","county":"aut","postcode":"voluptatum"}'

```

```javascript
const url = new URL("http://localhost/api/addresses");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "organisation_name": "laudantium",
    "line_1": "qui",
    "line_2": "culpa",
    "town": "quae",
    "county": "aut",
    "postcode": "voluptatum"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/addresses`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    organisation_name | string |  optional  | The organisation or company name on the address
    line_1 | string |  required  | First line of address
    line_2 | string |  optional  | Second line of address
    town | string |  optional  | Town or city
    county | string |  optional  | County or district
    postcode | string |  required  | Valid UK postcode

<!-- END_7eb2193c8e19862cc14fcc136b7e26c7 -->

<!-- START_6d18374cdb64ba2c29fce8e93086abae -->
## Display an address

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/addresses/1" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/addresses/1");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/addresses/{address}`


<!-- END_6d18374cdb64ba2c29fce8e93086abae -->

<!-- START_bf9ce70c708c4815f1564df9785855d6 -->
## Update an address

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "http://localhost/api/addresses/1" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"organisation_name":"optio","line_1":"exercitationem","line_2":"error","town":"perspiciatis","county":"voluptatem","postcode":"in"}'

```

```javascript
const url = new URL("http://localhost/api/addresses/1");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "organisation_name": "optio",
    "line_1": "exercitationem",
    "line_2": "error",
    "town": "perspiciatis",
    "county": "voluptatem",
    "postcode": "in"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/addresses/{address}`

`PATCH /api/addresses/{address}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    organisation_name | string |  optional  | The organisation or company name on the address
    line_1 | string |  optional  | First line of address
    line_2 | string |  optional  | Second line of address
    town | string |  optional  | Town or city
    county | string |  optional  | County or district
    postcode | string |  optional  | Valid UK postcode

<!-- END_bf9ce70c708c4815f1564df9785855d6 -->

<!-- START_f00a66f023a03318b5becb49ca2cc3ec -->
## Soft delete an address

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/addresses/1" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/addresses/1");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/addresses/{address}`


<!-- END_f00a66f023a03318b5becb49ca2cc3ec -->

<!-- START_5da7a20af47ea2fbb72501d9366665c4 -->
## Display all addresses

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/addresses" 
```

```javascript
const url = new URL("http://localhost/api/addresses");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/addresses`


<!-- END_5da7a20af47ea2fbb72501d9366665c4 -->

<!-- START_7eb2193c8e19862cc14fcc136b7e26c7 -->
## Store a new address

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/addresses" \
    -H "Content-Type: application/json" \
    -d '{"organisation_name":"voluptatem","line_1":"ut","line_2":"ut","town":"aspernatur","county":"eum","postcode":"ut"}'

```

```javascript
const url = new URL("http://localhost/api/addresses");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "organisation_name": "voluptatem",
    "line_1": "ut",
    "line_2": "ut",
    "town": "aspernatur",
    "county": "eum",
    "postcode": "ut"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/addresses`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    organisation_name | string |  optional  | The organisation or company name on the address
    line_1 | string |  required  | First line of address
    line_2 | string |  optional  | Second line of address
    town | string |  optional  | Town or city
    county | string |  optional  | County or district
    postcode | string |  required  | Valid UK postcode

<!-- END_7eb2193c8e19862cc14fcc136b7e26c7 -->

<!-- START_6d18374cdb64ba2c29fce8e93086abae -->
## Display an address

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/addresses/1" 
```

```javascript
const url = new URL("http://localhost/api/addresses/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/addresses/{address}`


<!-- END_6d18374cdb64ba2c29fce8e93086abae -->

<!-- START_bf9ce70c708c4815f1564df9785855d6 -->
## Update an address

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "http://localhost/api/addresses/1" \
    -H "Content-Type: application/json" \
    -d '{"organisation_name":"accusantium","line_1":"sunt","line_2":"odit","town":"voluptatibus","county":"quisquam","postcode":"nulla"}'

```

```javascript
const url = new URL("http://localhost/api/addresses/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "organisation_name": "accusantium",
    "line_1": "sunt",
    "line_2": "odit",
    "town": "voluptatibus",
    "county": "quisquam",
    "postcode": "nulla"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/addresses/{address}`

`PATCH /api/addresses/{address}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    organisation_name | string |  optional  | The organisation or company name on the address
    line_1 | string |  optional  | First line of address
    line_2 | string |  optional  | Second line of address
    town | string |  optional  | Town or city
    county | string |  optional  | County or district
    postcode | string |  optional  | Valid UK postcode

<!-- END_bf9ce70c708c4815f1564df9785855d6 -->

<!-- START_f00a66f023a03318b5becb49ca2cc3ec -->
## Soft delete an address

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/addresses/1" 
```

```javascript
const url = new URL("http://localhost/api/addresses/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/addresses/{address}`


<!-- END_f00a66f023a03318b5becb49ca2cc3ec -->

#Authentication functionality

OSJO Authentication is handled by JWT. First make a request to the login
route with a username and password. THis will return you a JWT that is
valid for the next 60 minutes. Include this as the Authorization header
in your requests e.g "Authorization: Bearer authTokenhere"
<!-- START_7ba029714012cd9c08cc50ae4dee9d7a -->
## Get a JWT via given credentials.

> Example request:

```bash
curl -X POST "http://localhost/api/auth/login" 
```

```javascript
const url = new URL("http://localhost/api/auth/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/auth/login`


<!-- END_7ba029714012cd9c08cc50ae4dee9d7a -->

<!-- START_5868c9422bc3266cef6569c8b841eb06 -->
## Log the user out (Invalidate the token).

> Example request:

```bash
curl -X POST "http://localhost/api/auth/logout" 
```

```javascript
const url = new URL("http://localhost/api/auth/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/auth/logout`


<!-- END_5868c9422bc3266cef6569c8b841eb06 -->

<!-- START_161baf69494173caa6c78bed328c2112 -->
## Refresh a token.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/refresh" 
```

```javascript
const url = new URL("http://localhost/api/refresh");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/refresh`


<!-- END_161baf69494173caa6c78bed328c2112 -->

<!-- START_728a2c525ecc2e5c02ae5e8dbe1ed606 -->
## Get the authenticated User.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/me" 
```

```javascript
const url = new URL("http://localhost/api/me");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/me`


<!-- END_728a2c525ecc2e5c02ae5e8dbe1ed606 -->

#Company management

Companies are entities that mean more than one company (or department)
can be managed with the same system, TODO
<!-- START_97364232fe5b1bdc20d7d5daf32726eb -->
## Display all companies

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/companies" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/companies");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/companies`


<!-- END_97364232fe5b1bdc20d7d5daf32726eb -->

<!-- START_5e64944b7d299c76dde9ad394e40b44b -->
## Store a new company

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/companies" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"cupiditate","size":6}'

```

```javascript
const url = new URL("http://localhost/api/companies");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "cupiditate",
    "size": 6
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/companies`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The company or business name
    size | integer |  optional  | The amount of employees at the company

<!-- END_5e64944b7d299c76dde9ad394e40b44b -->

<!-- START_ca88087291188254fd92015088e168ac -->
## Display a company

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/companies/1" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/companies/1");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/companies/{company}`


<!-- END_ca88087291188254fd92015088e168ac -->

<!-- START_244f386aa578917fdf101094aeece283 -->
## Update a company

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "http://localhost/api/companies/1" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"asperiores","size":7}'

```

```javascript
const url = new URL("http://localhost/api/companies/1");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "asperiores",
    "size": 7
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/companies/{company}`

`PATCH /api/companies/{company}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  optional  | The company or business name
    size | integer |  optional  | The amount of employees at the company

<!-- END_244f386aa578917fdf101094aeece283 -->

<!-- START_432a072fa2e2a9f0d32fd4fa1c01ef36 -->
## Soft delete a company

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/companies/1" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/companies/1");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/companies/{company}`


<!-- END_432a072fa2e2a9f0d32fd4fa1c01ef36 -->

<!-- START_97364232fe5b1bdc20d7d5daf32726eb -->
## Display all companies

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/companies" 
```

```javascript
const url = new URL("http://localhost/api/companies");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/companies`


<!-- END_97364232fe5b1bdc20d7d5daf32726eb -->

<!-- START_5e64944b7d299c76dde9ad394e40b44b -->
## Store a new company

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/companies" \
    -H "Content-Type: application/json" \
    -d '{"name":"quaerat","size":10}'

```

```javascript
const url = new URL("http://localhost/api/companies");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "quaerat",
    "size": 10
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/companies`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The company or business name
    size | integer |  optional  | The amount of employees at the company

<!-- END_5e64944b7d299c76dde9ad394e40b44b -->

<!-- START_ca88087291188254fd92015088e168ac -->
## Display a company

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/companies/1" 
```

```javascript
const url = new URL("http://localhost/api/companies/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/companies/{company}`


<!-- END_ca88087291188254fd92015088e168ac -->

<!-- START_244f386aa578917fdf101094aeece283 -->
## Update a company

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "http://localhost/api/companies/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"est","size":13}'

```

```javascript
const url = new URL("http://localhost/api/companies/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "est",
    "size": 13
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/companies/{company}`

`PATCH /api/companies/{company}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  optional  | The company or business name
    size | integer |  optional  | The amount of employees at the company

<!-- END_244f386aa578917fdf101094aeece283 -->

<!-- START_432a072fa2e2a9f0d32fd4fa1c01ef36 -->
## Soft delete a company

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/companies/1" 
```

```javascript
const url = new URL("http://localhost/api/companies/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/companies/{company}`


<!-- END_432a072fa2e2a9f0d32fd4fa1c01ef36 -->

#Customer management

Customers are the clients for our jobs. Theses customers are split from people so that
we can have a customer which is a single client or a customer that is an entire business
this way we can have multiple contacts for a business but a single customer.
<!-- START_5166f5bb75de21afbc19fe3e39f47938 -->
## Display all addresses

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/customers" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/customers");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/customers`


<!-- END_5166f5bb75de21afbc19fe3e39f47938 -->

<!-- START_cb810db56df598e9aeff682f04b2a543 -->
## Store a new customer

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/customers" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"officiis"}'

```

```javascript
const url = new URL("http://localhost/api/customers");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "officiis"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/customers`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The customers name

<!-- END_cb810db56df598e9aeff682f04b2a543 -->

<!-- START_4c3afcae440eaabe0cdaf28596d33712 -->
## Display a customer

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/customers/1" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/customers/1");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/customers/{customer}`


<!-- END_4c3afcae440eaabe0cdaf28596d33712 -->

<!-- START_1f86ea4d22cc416636d52e34062dabdf -->
## Update a customer

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "http://localhost/api/customers/1" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"name":"nam"}'

```

```javascript
const url = new URL("http://localhost/api/customers/1");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "nam"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/customers/{customer}`

`PATCH /api/customers/{customer}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The customers name

<!-- END_1f86ea4d22cc416636d52e34062dabdf -->

<!-- START_493b55e7d377760e84e4b40558c8bca5 -->
## Soft delete a customer

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/customers/1" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/customers/1");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/customers/{customer}`


<!-- END_493b55e7d377760e84e4b40558c8bca5 -->

<!-- START_5166f5bb75de21afbc19fe3e39f47938 -->
## Display all addresses

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/customers" 
```

```javascript
const url = new URL("http://localhost/api/customers");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/customers`


<!-- END_5166f5bb75de21afbc19fe3e39f47938 -->

<!-- START_cb810db56df598e9aeff682f04b2a543 -->
## Store a new customer

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/customers" \
    -H "Content-Type: application/json" \
    -d '{"name":"magnam"}'

```

```javascript
const url = new URL("http://localhost/api/customers");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "magnam"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/customers`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The customers name

<!-- END_cb810db56df598e9aeff682f04b2a543 -->

<!-- START_4c3afcae440eaabe0cdaf28596d33712 -->
## Display a customer

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/customers/1" 
```

```javascript
const url = new URL("http://localhost/api/customers/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/customers/{customer}`


<!-- END_4c3afcae440eaabe0cdaf28596d33712 -->

<!-- START_1f86ea4d22cc416636d52e34062dabdf -->
## Update a customer

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "http://localhost/api/customers/1" \
    -H "Content-Type: application/json" \
    -d '{"name":"tenetur"}'

```

```javascript
const url = new URL("http://localhost/api/customers/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "tenetur"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/customers/{customer}`

`PATCH /api/customers/{customer}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The customers name

<!-- END_1f86ea4d22cc416636d52e34062dabdf -->

<!-- START_493b55e7d377760e84e4b40558c8bca5 -->
## Soft delete a customer

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/customers/1" 
```

```javascript
const url = new URL("http://localhost/api/customers/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/customers/{customer}`


<!-- END_493b55e7d377760e84e4b40558c8bca5 -->

#Job management

Jobs are the generic idea of tasks or actions that need to be taken
by an individual, these are assigned to workers who then complete/edit/cancel
that job.
<!-- START_f560a4994d7a6bbc5a1af124f58010fe -->
## Display all jobs

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/jobs" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/jobs");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/jobs`


<!-- END_f560a4994d7a6bbc5a1af124f58010fe -->

<!-- START_2f4a4efc300ab058aeaf23c47fd14f26 -->
## Store a new job

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/jobs" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"customer_id":15,"customer_person_id":9,"customer_address_id":5,"job_type_id":7,"due_date":"ut","completed_at":"amet","title":"necessitatibus","description":"ab"}'

```

```javascript
const url = new URL("http://localhost/api/jobs");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "customer_id": 15,
    "customer_person_id": 9,
    "customer_address_id": 5,
    "job_type_id": 7,
    "due_date": "ut",
    "completed_at": "amet",
    "title": "necessitatibus",
    "description": "ab"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/jobs`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    customer_id | integer |  required  | The customer that the job is for
    customer_person_id | integer |  required  | The person that is going to be communicated with for this job
    customer_address_id | integer |  required  | The address that the job will take place
    job_type_id | integer |  required  | The type of the job, see job types for options
    due_date | Carbon |  required  | The date that the job is due
    completed_at | Carbon |  optional  | The date that the job was competed (if in past)
    title | string |  required  | The simple title for the job
    description | string |  optional  | The outline of what the job requirements are

<!-- END_2f4a4efc300ab058aeaf23c47fd14f26 -->

<!-- START_468923cff47eb7a1e0e05fe39b142f6b -->
## Display a job

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/jobs/1" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/jobs/1");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/jobs/{job}`


<!-- END_468923cff47eb7a1e0e05fe39b142f6b -->

<!-- START_1c82f515192d980575b9f164dabc4336 -->
## Update a job

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "http://localhost/api/jobs/1" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"customer_id":5,"customer_person_id":20,"customer_address_id":14,"job_type_id":20,"due_date":"ullam","completed_at":"repudiandae","title":"eos","description":"est"}'

```

```javascript
const url = new URL("http://localhost/api/jobs/1");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "customer_id": 5,
    "customer_person_id": 20,
    "customer_address_id": 14,
    "job_type_id": 20,
    "due_date": "ullam",
    "completed_at": "repudiandae",
    "title": "eos",
    "description": "est"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/jobs/{job}`

`PATCH /api/jobs/{job}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    customer_id | integer |  optional  | The customer that the job is for
    customer_person_id | integer |  optional  | The person that is going to be communicated with for this job
    customer_address_id | integer |  optional  | The address that the job will take place
    job_type_id | integer |  optional  | The type of the job, see job types for options
    due_date | Carbon |  optional  | The date that the job is due
    completed_at | Carbon |  optional  | The date that the job was competed (if in past)
    title | string |  optional  | The simple title for the job
    description | string |  optional  | The outline of what the job requirements are

<!-- END_1c82f515192d980575b9f164dabc4336 -->

<!-- START_495abd0e88e58ffb80f3677f9ef0b486 -->
## Soft delete a job

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/jobs/1" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/jobs/1");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/jobs/{job}`


<!-- END_495abd0e88e58ffb80f3677f9ef0b486 -->

<!-- START_f560a4994d7a6bbc5a1af124f58010fe -->
## Display all jobs

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/jobs" 
```

```javascript
const url = new URL("http://localhost/api/jobs");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/jobs`


<!-- END_f560a4994d7a6bbc5a1af124f58010fe -->

<!-- START_2f4a4efc300ab058aeaf23c47fd14f26 -->
## Store a new job

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/jobs" \
    -H "Content-Type: application/json" \
    -d '{"customer_id":19,"customer_person_id":8,"customer_address_id":3,"job_type_id":4,"due_date":"et","completed_at":"tenetur","title":"dolores","description":"voluptas"}'

```

```javascript
const url = new URL("http://localhost/api/jobs");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "customer_id": 19,
    "customer_person_id": 8,
    "customer_address_id": 3,
    "job_type_id": 4,
    "due_date": "et",
    "completed_at": "tenetur",
    "title": "dolores",
    "description": "voluptas"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/jobs`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    customer_id | integer |  required  | The customer that the job is for
    customer_person_id | integer |  required  | The person that is going to be communicated with for this job
    customer_address_id | integer |  required  | The address that the job will take place
    job_type_id | integer |  required  | The type of the job, see job types for options
    due_date | Carbon |  required  | The date that the job is due
    completed_at | Carbon |  optional  | The date that the job was competed (if in past)
    title | string |  required  | The simple title for the job
    description | string |  optional  | The outline of what the job requirements are

<!-- END_2f4a4efc300ab058aeaf23c47fd14f26 -->

<!-- START_468923cff47eb7a1e0e05fe39b142f6b -->
## Display a job

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/jobs/1" 
```

```javascript
const url = new URL("http://localhost/api/jobs/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/jobs/{job}`


<!-- END_468923cff47eb7a1e0e05fe39b142f6b -->

<!-- START_1c82f515192d980575b9f164dabc4336 -->
## Update a job

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "http://localhost/api/jobs/1" \
    -H "Content-Type: application/json" \
    -d '{"customer_id":19,"customer_person_id":6,"customer_address_id":19,"job_type_id":18,"due_date":"voluptatem","completed_at":"ut","title":"quasi","description":"at"}'

```

```javascript
const url = new URL("http://localhost/api/jobs/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "customer_id": 19,
    "customer_person_id": 6,
    "customer_address_id": 19,
    "job_type_id": 18,
    "due_date": "voluptatem",
    "completed_at": "ut",
    "title": "quasi",
    "description": "at"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/jobs/{job}`

`PATCH /api/jobs/{job}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    customer_id | integer |  optional  | The customer that the job is for
    customer_person_id | integer |  optional  | The person that is going to be communicated with for this job
    customer_address_id | integer |  optional  | The address that the job will take place
    job_type_id | integer |  optional  | The type of the job, see job types for options
    due_date | Carbon |  optional  | The date that the job is due
    completed_at | Carbon |  optional  | The date that the job was competed (if in past)
    title | string |  optional  | The simple title for the job
    description | string |  optional  | The outline of what the job requirements are

<!-- END_1c82f515192d980575b9f164dabc4336 -->

<!-- START_495abd0e88e58ffb80f3677f9ef0b486 -->
## Soft delete a job

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/jobs/1" 
```

```javascript
const url = new URL("http://localhost/api/jobs/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/jobs/{job}`


<!-- END_495abd0e88e58ffb80f3677f9ef0b486 -->

#Job schedule management

The job schedule contains information about when a job is
going to be done, and who it is going to be done by.
<!-- START_6ded00b95ce47883e70f101682a58677 -->
## Display all job schedule elements

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/job-schedule" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/job-schedule");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/job-schedule`


<!-- END_6ded00b95ce47883e70f101682a58677 -->

<!-- START_2eab578814ca22e144083aafc2e72a00 -->
## Store a new job schedule element

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/job-schedule" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"job_id":15,"user_id":9,"scheduled_time":"placeat","job_length":7}'

```

```javascript
const url = new URL("http://localhost/api/job-schedule");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "job_id": 15,
    "user_id": 9,
    "scheduled_time": "placeat",
    "job_length": 7
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/job-schedule`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    job_id | integer |  required  | The job to schedule
    user_id | integer |  required  | The person who you want to assign the job to
    scheduled_time | \Carbon\Carbon |  required  | The date when the job should take place
    job_length | integer |  optional  | The length of the job in minutes

<!-- END_2eab578814ca22e144083aafc2e72a00 -->

<!-- START_27542a235dbd76787dafbc7c569364c2 -->
## Show a job schedule element

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/job-schedule/1" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/job-schedule/1");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/job-schedule/{job_schedule}`


<!-- END_27542a235dbd76787dafbc7c569364c2 -->

<!-- START_fc9c245ff686ce7e9eb3e326b0fbb534 -->
## Update a job schedule element

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "http://localhost/api/job-schedule/1" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"job_id":1,"user_id":8,"scheduled_time":"enim","job_length":15}'

```

```javascript
const url = new URL("http://localhost/api/job-schedule/1");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "job_id": 1,
    "user_id": 8,
    "scheduled_time": "enim",
    "job_length": 15
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/job-schedule/{job_schedule}`

`PATCH /api/job-schedule/{job_schedule}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    job_id | integer |  optional  | The job to schedule
    user_id | integer |  optional  | The person who you want to assign the job to
    scheduled_time | \Carbon\Carbon |  optional  | The date when the job should take place
    job_length | integer |  optional  | The length of the job in minutes

<!-- END_fc9c245ff686ce7e9eb3e326b0fbb534 -->

<!-- START_647f09dc3498854b7ca0c48f18536c11 -->
## soft delete a job schedule element

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/job-schedule/1" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/job-schedule/1");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/job-schedule/{job_schedule}`


<!-- END_647f09dc3498854b7ca0c48f18536c11 -->

<!-- START_6ded00b95ce47883e70f101682a58677 -->
## Display all job schedule elements

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/job-schedule" 
```

```javascript
const url = new URL("http://localhost/api/job-schedule");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/job-schedule`


<!-- END_6ded00b95ce47883e70f101682a58677 -->

<!-- START_2eab578814ca22e144083aafc2e72a00 -->
## Store a new job schedule element

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/job-schedule" \
    -H "Content-Type: application/json" \
    -d '{"job_id":3,"user_id":9,"scheduled_time":"inventore","job_length":20}'

```

```javascript
const url = new URL("http://localhost/api/job-schedule");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "job_id": 3,
    "user_id": 9,
    "scheduled_time": "inventore",
    "job_length": 20
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/job-schedule`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    job_id | integer |  required  | The job to schedule
    user_id | integer |  required  | The person who you want to assign the job to
    scheduled_time | \Carbon\Carbon |  required  | The date when the job should take place
    job_length | integer |  optional  | The length of the job in minutes

<!-- END_2eab578814ca22e144083aafc2e72a00 -->

<!-- START_27542a235dbd76787dafbc7c569364c2 -->
## Show a job schedule element

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/job-schedule/1" 
```

```javascript
const url = new URL("http://localhost/api/job-schedule/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/job-schedule/{job_schedule}`


<!-- END_27542a235dbd76787dafbc7c569364c2 -->

<!-- START_fc9c245ff686ce7e9eb3e326b0fbb534 -->
## Update a job schedule element

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "http://localhost/api/job-schedule/1" \
    -H "Content-Type: application/json" \
    -d '{"job_id":7,"user_id":3,"scheduled_time":"aut","job_length":5}'

```

```javascript
const url = new URL("http://localhost/api/job-schedule/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "job_id": 7,
    "user_id": 3,
    "scheduled_time": "aut",
    "job_length": 5
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/job-schedule/{job_schedule}`

`PATCH /api/job-schedule/{job_schedule}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    job_id | integer |  optional  | The job to schedule
    user_id | integer |  optional  | The person who you want to assign the job to
    scheduled_time | \Carbon\Carbon |  optional  | The date when the job should take place
    job_length | integer |  optional  | The length of the job in minutes

<!-- END_fc9c245ff686ce7e9eb3e326b0fbb534 -->

<!-- START_647f09dc3498854b7ca0c48f18536c11 -->
## soft delete a job schedule element

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/job-schedule/1" 
```

```javascript
const url = new URL("http://localhost/api/job-schedule/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/job-schedule/{job_schedule}`


<!-- END_647f09dc3498854b7ca0c48f18536c11 -->

#User management

Users are defined as the people who are using the system, the primary types of user are:
worker, admin, company admin, super admin
<!-- START_511eeadfce956cbeea74ce3763392dcd -->
## Display all users

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/users" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/users`


<!-- END_511eeadfce956cbeea74ce3763392dcd -->

<!-- START_105ec9a65e7bc0a1aeccf3057b069abb -->
## Store a new user

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/users" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"email":"rerum","first_name":"aut","last_name":"nihil","password":"ut","disabled":false}'

```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "rerum",
    "first_name": "aut",
    "last_name": "nihil",
    "password": "ut",
    "disabled": false
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/users`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | string |  required  | The email address for the user
    first_name | string |  required  | The users first name
    last_name | string |  required  | The users last name
    password | string |  optional  | The password for the user
    disabled | boolean |  optional  | If the user is disabled or not

<!-- END_105ec9a65e7bc0a1aeccf3057b069abb -->

<!-- START_185d8dd11617f7199ad63b2137aa37fb -->
## Display a user

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/users/1" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/users/1");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/users/{user}`


<!-- END_185d8dd11617f7199ad63b2137aa37fb -->

<!-- START_f274972870e4b957c00965c5d2c7e7bc -->
## Update a user

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "http://localhost/api/users/1" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"email":"molestiae","first_name":"quo","last_name":"voluptate","password":"nam","disabled":false}'

```

```javascript
const url = new URL("http://localhost/api/users/1");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "molestiae",
    "first_name": "quo",
    "last_name": "voluptate",
    "password": "nam",
    "disabled": false
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/users/{user}`

`PATCH /api/users/{user}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | string |  optional  | The email address for the user
    first_name | string |  optional  | The users first name
    last_name | string |  optional  | The users last name
    password | string |  optional  | The password for the user
    disabled | boolean |  optional  | If the user is disabled or not

<!-- END_f274972870e4b957c00965c5d2c7e7bc -->

<!-- START_ccafd5a881df2ccf542ad8b0709f6fb6 -->
## Soft delete a user

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/users/1" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/users/1");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/users/{user}`


<!-- END_ccafd5a881df2ccf542ad8b0709f6fb6 -->

<!-- START_511eeadfce956cbeea74ce3763392dcd -->
## Display all users

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/users" 
```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/users`


<!-- END_511eeadfce956cbeea74ce3763392dcd -->

<!-- START_105ec9a65e7bc0a1aeccf3057b069abb -->
## Store a new user

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST "http://localhost/api/users" \
    -H "Content-Type: application/json" \
    -d '{"email":"ut","first_name":"delectus","last_name":"numquam","password":"fuga","disabled":true}'

```

```javascript
const url = new URL("http://localhost/api/users");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "ut",
    "first_name": "delectus",
    "last_name": "numquam",
    "password": "fuga",
    "disabled": true
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/users`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | string |  required  | The email address for the user
    first_name | string |  required  | The users first name
    last_name | string |  required  | The users last name
    password | string |  optional  | The password for the user
    disabled | boolean |  optional  | If the user is disabled or not

<!-- END_105ec9a65e7bc0a1aeccf3057b069abb -->

<!-- START_185d8dd11617f7199ad63b2137aa37fb -->
## Display a user

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET -G "http://localhost/api/users/1" 
```

```javascript
const url = new URL("http://localhost/api/users/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response:

```json
null
```

### HTTP Request
`GET /api/users/{user}`


<!-- END_185d8dd11617f7199ad63b2137aa37fb -->

<!-- START_f274972870e4b957c00965c5d2c7e7bc -->
## Update a user

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -d '{"email":"tempore","first_name":"vel","last_name":"soluta","password":"qui","disabled":true}'

```

```javascript
const url = new URL("http://localhost/api/users/1");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "tempore",
    "first_name": "vel",
    "last_name": "soluta",
    "password": "qui",
    "disabled": true
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/users/{user}`

`PATCH /api/users/{user}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | string |  optional  | The email address for the user
    first_name | string |  optional  | The users first name
    last_name | string |  optional  | The users last name
    password | string |  optional  | The password for the user
    disabled | boolean |  optional  | If the user is disabled or not

<!-- END_f274972870e4b957c00965c5d2c7e7bc -->

<!-- START_ccafd5a881df2ccf542ad8b0709f6fb6 -->
## Soft delete a user

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE "http://localhost/api/users/1" 
```

```javascript
const url = new URL("http://localhost/api/users/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/users/{user}`


<!-- END_ccafd5a881df2ccf542ad8b0709f6fb6 -->


