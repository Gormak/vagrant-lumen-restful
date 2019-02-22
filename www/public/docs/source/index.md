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

<!-- END_INFO -->

#general
<!-- START_cfec366723cbf7753204ffb3dc41b015 -->
## /api/v1/sessions
> Example request:

```bash
curl -X GET -G "/api/v1/sessions" 
```

```javascript
const url = new URL("/api/v1/sessions");

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
`GET /api/v1/sessions`


<!-- END_cfec366723cbf7753204ffb3dc41b015 -->

<!-- START_8a0fb4e651de84dabbf62228407bd9c4 -->
## /api/v1/sessions/{id}
> Example request:

```bash
curl -X GET -G "/api/v1/sessions/{id}" 
```

```javascript
const url = new URL("/api/v1/sessions/{id}");

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
`GET /api/v1/sessions/{id}`


<!-- END_8a0fb4e651de84dabbf62228407bd9c4 -->

<!-- START_fd8c29b315f60a2a76f5c1150d225f0a -->
## /api/v1/sessions
> Example request:

```bash
curl -X POST "/api/v1/sessions" 
```

```javascript
const url = new URL("/api/v1/sessions");

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
`POST /api/v1/sessions`


<!-- END_fd8c29b315f60a2a76f5c1150d225f0a -->

<!-- START_57424d5ed4db0199b3fa5545c478a1bb -->
## /api/v1/sessions/{id}
> Example request:

```bash
curl -X DELETE "/api/v1/sessions/{id}" 
```

```javascript
const url = new URL("/api/v1/sessions/{id}");

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
`DELETE /api/v1/sessions/{id}`


<!-- END_57424d5ed4db0199b3fa5545c478a1bb -->

<!-- START_87ea1d9eecaf3ecd027544389667aa0b -->
## /api/v1/sessions/{id}
> Example request:

```bash
curl -X PUT "/api/v1/sessions/{id}" 
```

```javascript
const url = new URL("/api/v1/sessions/{id}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT /api/v1/sessions/{id}`


<!-- END_87ea1d9eecaf3ecd027544389667aa0b -->


