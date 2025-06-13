# 🔓 Abrelatas - Herramienta de Fuerza Bruta Avanzada

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Version: 0.1.0](https://img.shields.io/badge/Version-0.1.0-blue)](https://github.com/tu_usuario/abrelatas)

Herramienta profesional para pruebas de fuerza bruta en entornos controlados, diseñada para auditorías de seguridad y pruebas de penetración autorizadas.

## 📦 Instalación

```bash
git clone https://github.com/tu_usuario/abrelatas.git
cd abrelatas
chmod +x abrelatas
sudo mv abrelatas /usr/local/bin/  # Opcional para instalación global
```

## 🚀 Características Principales

- ✅ Soporte para múltiples tipos de ataque (diccionario/rango numérico)
- ✅ Métodos HTTP personalizables (GET, POST, PUT, etc.)
- ✅ Procesamiento en paralelo para mayor velocidad
- ✅ Rotación automática de User-Agents
- ✅ Soporte para proxies TOR integrado
- ✅ Manejo avanzado de sesiones con cookies
- ✅ Formatos de payload (JSON/x-www-form-urlencoded)
- ✅ Salida detallada con métricas de tiempo/respuesta
- ✅ Modo verboso para depuración

## 🛠 Uso Básico

```bash
abrelatas [OPCIONES]
```

### Ejemplos Prácticos:

**Ataque por diccionario básico:**

```bash
abrelatas -u https://example.com/login -d passwords.txt -p 'user=admin&password=ABRIR'
```

**Ataque por rango numérico:**

```bash
abrelatas -u https://example.com/pin -r 0000-9999 -p 'pin=ABRIR'
```

**Ataque con JSON payload:**

```bash
abrelatas -u https://api.example.com/auth -d tokens.txt -a payload.json --format json
```

**Ataque paralelo (4 procesos):**

```bash
abrelatas -u https://example.com/login -d rockyou.txt -p 'login=ABRIR' -P 4
```

## 📌 Opciones Completas

| Opción                | Descripción                            |
| --------------------- | -------------------------------------- |
| `-h, --help`          | Mostrar ayuda                          |
| `-v, --version`       | Mostrar versión                        |
| `-V, --verbose`       | Modo verboso                           |
| `-u, --url URL`       | URL objetivo (requerido)               |
| `-m, --method METHOD` | Método HTTP (default: POST)            |
| `-s, --delay SECONDS` | Delay entre intentos (default: 0)      |
| `-P, --parallel NUM`  | Número de procesos paralelos           |
| `-r, --range FROM-TO` | Rango numérico (ej. 1000-2000)         |
| `-d, --dict FILE`     | Archivo diccionario                    |
| `-p, --payload DATA`  | Datos a enviar (usar ABRIR para clave) |
| `-a, --payload-file`  | Archivo con datos payload              |
| `-f, --format FORMAT` | Formato (form/json, default: form)     |
| `-H, --header HEADER` | Header HTTP adicional                  |
| `-c, --cookies FILE`  | Archivo de cookies a usar              |
| `-o, --output FILE`   | Archivo de salida personalizado        |
| `--random-agent`      | Usar User-Agent aleatorio              |
| `--tor`               | Usar proxy TOR (127.0.0.1:9050)        |

## 📊 Salida de Ejemplo

```
[*] Iniciando ataque por diccionario contra: https://example.com/login
[*] Usando diccionario: passwords.txt
[*] Archivo de salida: example.com-20230615.log

PASSWORD           | HTTP_CODE | TIME     | LENGTH
------------------------------------------------
password123        | 200       | 1.23s    | 1256
qwerty             | 200       | 1.15s    | 1256
letmein            | 403       | 1.30s    | 210
123456             | 200       | 1.18s    | 320

[+] ¡Posible éxito! Intento: 123456
[*] Ataque por diccionario completado
```

## ⚠️ Advertencia Legal

Este software es únicamente para:

- Pruebas de penetración autorizadas
- Auditorías de seguridad en sistemas propios
- Investigación y educación en seguridad informática

**El uso no autorizado contra sistemas sin permiso explícito es ilegal y está estrictamente prohibido.** El desarrollador no asume responsabilidad por el mal uso de esta herramienta.

## 📄 Licencia

MIT License - Ver archivo [LICENSE](LICENSE) para más detalles.

---

Desarrollado con ❤️ por [chrisatdev](https://github.com/chrisatdev) - ¡Contribuciones son bienvenidas!
