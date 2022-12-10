--
-- PostgreSQL database dump
--

-- Dumped from database version 14.5
-- Dumped by pg_dump version 14.2

-- Started on 2022-12-10 16:14:07

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 3 (class 2615 OID 2200)
-- Name: public; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA public;


ALTER SCHEMA public OWNER TO postgres;

--
-- TOC entry 3439 (class 0 OID 0)
-- Dependencies: 3
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON SCHEMA public IS 'standard public schema';


SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 209 (class 1259 OID 33703)
-- Name: beneficios; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.beneficios (
    codigo character varying NOT NULL,
    descripcion character varying NOT NULL,
    ayuda character varying NOT NULL
);


ALTER TABLE public.beneficios OWNER TO postgres;

--
-- TOC entry 223 (class 1259 OID 33981)
-- Name: consultores_de_riesgo_y_fomento; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.consultores_de_riesgo_y_fomento (
    rut bigint NOT NULL
);


ALTER TABLE public.consultores_de_riesgo_y_fomento OWNER TO postgres;

--
-- TOC entry 220 (class 1259 OID 33909)
-- Name: entrega; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.entrega (
    codigo character varying NOT NULL,
    codigobeneficio character varying NOT NULL
);


ALTER TABLE public.entrega OWNER TO postgres;

--
-- TOC entry 225 (class 1259 OID 34011)
-- Name: especialidades; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.especialidades (
    id_especialidades character varying NOT NULL,
    nombre character varying NOT NULL,
    descripcion character varying NOT NULL
);


ALTER TABLE public.especialidades OWNER TO postgres;

--
-- TOC entry 210 (class 1259 OID 33708)
-- Name: establecimiento; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.establecimiento (
    rol character varying NOT NULL,
    "jefe de oficina" character varying NOT NULL,
    direccion character varying NOT NULL,
    telefono integer NOT NULL,
    tipoestablecimiento character varying NOT NULL,
    correo_electronico character varying NOT NULL
);


ALTER TABLE public.establecimiento OWNER TO postgres;

--
-- TOC entry 211 (class 1259 OID 33718)
-- Name: juridico; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.juridico (
    id bigint NOT NULL,
    telefono integer NOT NULL,
    region character varying NOT NULL,
    pais character varying NOT NULL,
    direccion character varying NOT NULL,
    giro bigint NOT NULL,
    razonsocial character varying NOT NULL
);


ALTER TABLE public.juridico OWNER TO postgres;

--
-- TOC entry 212 (class 1259 OID 33723)
-- Name: natural; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public."natural" (
    id bigint NOT NULL,
    profesion character varying NOT NULL,
    direccion character varying NOT NULL,
    telefono integer NOT NULL,
    nacionalidad character varying NOT NULL,
    "fecha de nacimiento" character varying NOT NULL,
    emprendedor character varying NOT NULL
);


ALTER TABLE public."natural" OWNER TO postgres;

--
-- TOC entry 213 (class 1259 OID 33728)
-- Name: personal; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.personal (
    nombre character varying NOT NULL,
    rut bigint NOT NULL
);


ALTER TABLE public.personal OWNER TO postgres;

--
-- TOC entry 214 (class 1259 OID 33733)
-- Name: postula; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.postula (
    codigo character varying NOT NULL,
    id bigint NOT NULL,
    fecha character varying NOT NULL
);


ALTER TABLE public.postula OWNER TO postgres;

--
-- TOC entry 215 (class 1259 OID 33738)
-- Name: programa; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.programa (
    codigo character varying NOT NULL,
    alcance character varying NOT NULL,
    nombre character varying,
    descripcion character varying NOT NULL
);


ALTER TABLE public.programa OWNER TO postgres;

--
-- TOC entry 219 (class 1259 OID 33886)
-- Name: requiere; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.requiere (
    identificador character varying NOT NULL,
    codigo character varying NOT NULL
);


ALTER TABLE public.requiere OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 33743)
-- Name: requisitos; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.requisitos (
    identificador character varying NOT NULL,
    descripcion character varying NOT NULL,
    codigoprograma character varying NOT NULL
);


ALTER TABLE public.requisitos OWNER TO postgres;

--
-- TOC entry 224 (class 1259 OID 34004)
-- Name: tiene; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tiene (
    rut bigint NOT NULL,
    id_especialidad character varying NOT NULL
);


ALTER TABLE public.tiene OWNER TO postgres;

--
-- TOC entry 221 (class 1259 OID 33931)
-- Name: trabajador; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.trabajador (
    rut bigint NOT NULL,
    correo_electronico character varying NOT NULL
);


ALTER TABLE public.trabajador OWNER TO postgres;

--
-- TOC entry 222 (class 1259 OID 33951)
-- Name: trabajador_de_oficina; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.trabajador_de_oficina (
    rut bigint NOT NULL,
    "rolE" character varying NOT NULL
);


ALTER TABLE public.trabajador_de_oficina OWNER TO postgres;

--
-- TOC entry 217 (class 1259 OID 33758)
-- Name: trabajan; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.trabajan (
    rut bigint NOT NULL,
    codigo character varying NOT NULL
);


ALTER TABLE public.trabajan OWNER TO postgres;

--
-- TOC entry 218 (class 1259 OID 33763)
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.usuario (
    id bigint NOT NULL,
    region character varying NOT NULL,
    nacionalidad character varying NOT NULL,
    comuna character varying NOT NULL,
    sexo character(1) NOT NULL,
    "fecha de nacimiento" character varying NOT NULL,
    rut bigint NOT NULL
);


ALTER TABLE public.usuario OWNER TO postgres;

--
-- TOC entry 3417 (class 0 OID 33703)
-- Dependencies: 209
-- Data for Name: beneficios; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.beneficios (codigo, descripcion, ayuda) FROM stdin;
\.


--
-- TOC entry 3431 (class 0 OID 33981)
-- Dependencies: 223
-- Data for Name: consultores_de_riesgo_y_fomento; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.consultores_de_riesgo_y_fomento (rut) FROM stdin;
\.


--
-- TOC entry 3428 (class 0 OID 33909)
-- Dependencies: 220
-- Data for Name: entrega; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.entrega (codigo, codigobeneficio) FROM stdin;
\.


--
-- TOC entry 3433 (class 0 OID 34011)
-- Dependencies: 225
-- Data for Name: especialidades; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.especialidades (id_especialidades, nombre, descripcion) FROM stdin;
\.


--
-- TOC entry 3418 (class 0 OID 33708)
-- Dependencies: 210
-- Data for Name: establecimiento; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.establecimiento (rol, "jefe de oficina", direccion, telefono, tipoestablecimiento, correo_electronico) FROM stdin;
\.


--
-- TOC entry 3419 (class 0 OID 33718)
-- Dependencies: 211
-- Data for Name: juridico; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.juridico (id, telefono, region, pais, direccion, giro, razonsocial) FROM stdin;
\.


--
-- TOC entry 3420 (class 0 OID 33723)
-- Dependencies: 212
-- Data for Name: natural; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public."natural" (id, profesion, direccion, telefono, nacionalidad, "fecha de nacimiento", emprendedor) FROM stdin;
\.


--
-- TOC entry 3421 (class 0 OID 33728)
-- Dependencies: 213
-- Data for Name: personal; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.personal (nombre, rut) FROM stdin;
 veronica almendra	1562
\.


--
-- TOC entry 3422 (class 0 OID 33733)
-- Dependencies: 214
-- Data for Name: postula; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.postula (codigo, id, fecha) FROM stdin;
\.


--
-- TOC entry 3423 (class 0 OID 33738)
-- Dependencies: 215
-- Data for Name: programa; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.programa (codigo, alcance, nombre, descripcion) FROM stdin;
\.


--
-- TOC entry 3427 (class 0 OID 33886)
-- Dependencies: 219
-- Data for Name: requiere; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.requiere (identificador, codigo) FROM stdin;
\.


--
-- TOC entry 3424 (class 0 OID 33743)
-- Dependencies: 216
-- Data for Name: requisitos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.requisitos (identificador, descripcion, codigoprograma) FROM stdin;
\.


--
-- TOC entry 3432 (class 0 OID 34004)
-- Dependencies: 224
-- Data for Name: tiene; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tiene (rut, id_especialidad) FROM stdin;
\.


--
-- TOC entry 3429 (class 0 OID 33931)
-- Dependencies: 221
-- Data for Name: trabajador; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.trabajador (rut, correo_electronico) FROM stdin;
\.


--
-- TOC entry 3430 (class 0 OID 33951)
-- Dependencies: 222
-- Data for Name: trabajador_de_oficina; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.trabajador_de_oficina (rut, "rolE") FROM stdin;
\.


--
-- TOC entry 3425 (class 0 OID 33758)
-- Dependencies: 217
-- Data for Name: trabajan; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.trabajan (rut, codigo) FROM stdin;
\.


--
-- TOC entry 3426 (class 0 OID 33763)
-- Dependencies: 218
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.usuario (id, region, nacionalidad, comuna, sexo, "fecha de nacimiento", rut) FROM stdin;
\.


--
-- TOC entry 3228 (class 2606 OID 33771)
-- Name: beneficios beneficios_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.beneficios
    ADD CONSTRAINT beneficios_pk PRIMARY KEY (codigo);


--
-- TOC entry 3256 (class 2606 OID 33985)
-- Name: consultores_de_riesgo_y_fomento consultores_de_riesgo_y_fomento_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.consultores_de_riesgo_y_fomento
    ADD CONSTRAINT consultores_de_riesgo_y_fomento_pk PRIMARY KEY (rut);


--
-- TOC entry 3250 (class 2606 OID 33915)
-- Name: entrega entrega_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.entrega
    ADD CONSTRAINT entrega_pk PRIMARY KEY (codigo);


--
-- TOC entry 3230 (class 2606 OID 33773)
-- Name: establecimiento establecimiento_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.establecimiento
    ADD CONSTRAINT establecimiento_pk PRIMARY KEY (rol);


--
-- TOC entry 3232 (class 2606 OID 33777)
-- Name: juridico juridico_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.juridico
    ADD CONSTRAINT juridico_pk PRIMARY KEY (id);


--
-- TOC entry 3234 (class 2606 OID 33779)
-- Name: natural natural_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."natural"
    ADD CONSTRAINT natural_pk PRIMARY KEY (id);


--
-- TOC entry 3236 (class 2606 OID 33781)
-- Name: personal personal_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.personal
    ADD CONSTRAINT personal_pk PRIMARY KEY (rut);


--
-- TOC entry 3260 (class 2606 OID 34017)
-- Name: especialidades pk_id; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.especialidades
    ADD CONSTRAINT pk_id PRIMARY KEY (id_especialidades);


--
-- TOC entry 3238 (class 2606 OID 33783)
-- Name: postula postula_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.postula
    ADD CONSTRAINT postula_pk PRIMARY KEY (codigo, id);


--
-- TOC entry 3240 (class 2606 OID 33785)
-- Name: programa programa_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.programa
    ADD CONSTRAINT programa_pk PRIMARY KEY (codigo);


--
-- TOC entry 3248 (class 2606 OID 33892)
-- Name: requiere requiere_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.requiere
    ADD CONSTRAINT requiere_pk PRIMARY KEY (identificador);


--
-- TOC entry 3242 (class 2606 OID 33787)
-- Name: requisitos requisitos_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.requisitos
    ADD CONSTRAINT requisitos_pk PRIMARY KEY (identificador);


--
-- TOC entry 3258 (class 2606 OID 34010)
-- Name: tiene tiene_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tiene
    ADD CONSTRAINT tiene_pk PRIMARY KEY (rut, id_especialidad);


--
-- TOC entry 3254 (class 2606 OID 33957)
-- Name: trabajador_de_oficina trabajador_de_oficina_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.trabajador_de_oficina
    ADD CONSTRAINT trabajador_de_oficina_pk PRIMARY KEY (rut);


--
-- TOC entry 3252 (class 2606 OID 33939)
-- Name: trabajador trabajador_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.trabajador
    ADD CONSTRAINT trabajador_pk PRIMARY KEY (rut);


--
-- TOC entry 3244 (class 2606 OID 33992)
-- Name: trabajan trabajan_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.trabajan
    ADD CONSTRAINT trabajan_pk PRIMARY KEY (rut, codigo);


--
-- TOC entry 3246 (class 2606 OID 33795)
-- Name: usuario usuario_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pk PRIMARY KEY (id);


--
-- TOC entry 3261 (class 2606 OID 33926)
-- Name: beneficios beneficios_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.beneficios
    ADD CONSTRAINT beneficios_fk FOREIGN KEY (codigo) REFERENCES public.entrega(codigo);


--
-- TOC entry 3275 (class 2606 OID 33986)
-- Name: consultores_de_riesgo_y_fomento consultores_de_riesgo_y_fomento_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.consultores_de_riesgo_y_fomento
    ADD CONSTRAINT consultores_de_riesgo_y_fomento_fk FOREIGN KEY (rut) REFERENCES public.trabajador(rut);


--
-- TOC entry 3271 (class 2606 OID 33921)
-- Name: entrega entrega_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.entrega
    ADD CONSTRAINT entrega_fk FOREIGN KEY (codigobeneficio) REFERENCES public.programa(codigo);


--
-- TOC entry 3267 (class 2606 OID 33861)
-- Name: trabajan fk_codigo; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.trabajan
    ADD CONSTRAINT fk_codigo FOREIGN KEY (codigo) REFERENCES public.programa(codigo);


--
-- TOC entry 3274 (class 2606 OID 33976)
-- Name: trabajador_de_oficina fk_rol; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.trabajador_de_oficina
    ADD CONSTRAINT fk_rol FOREIGN KEY ("rolE") REFERENCES public.establecimiento(rol);


--
-- TOC entry 3273 (class 2606 OID 33963)
-- Name: trabajador_de_oficina fk_rut; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.trabajador_de_oficina
    ADD CONSTRAINT fk_rut FOREIGN KEY (rut) REFERENCES public.trabajador(rut);


--
-- TOC entry 3262 (class 2606 OID 33881)
-- Name: juridico juridico_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.juridico
    ADD CONSTRAINT juridico_fk FOREIGN KEY (id) REFERENCES public.usuario(id);


--
-- TOC entry 3263 (class 2606 OID 33876)
-- Name: natural natural_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public."natural"
    ADD CONSTRAINT natural_fk FOREIGN KEY (id) REFERENCES public.usuario(id);


--
-- TOC entry 3264 (class 2606 OID 33826)
-- Name: postula postula_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.postula
    ADD CONSTRAINT postula_fk FOREIGN KEY (codigo) REFERENCES public.programa(codigo);


--
-- TOC entry 3265 (class 2606 OID 33831)
-- Name: postula postula_fk_1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.postula
    ADD CONSTRAINT postula_fk_1 FOREIGN KEY (id) REFERENCES public.usuario(id);


--
-- TOC entry 3270 (class 2606 OID 33894)
-- Name: requiere requiere_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.requiere
    ADD CONSTRAINT requiere_fk FOREIGN KEY (codigo) REFERENCES public.programa(codigo);


--
-- TOC entry 3266 (class 2606 OID 33904)
-- Name: requisitos requisitos_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.requisitos
    ADD CONSTRAINT requisitos_fk FOREIGN KEY (identificador) REFERENCES public.requiere(identificador);


--
-- TOC entry 3276 (class 2606 OID 34018)
-- Name: tiene tiene_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tiene
    ADD CONSTRAINT tiene_fk FOREIGN KEY (rut) REFERENCES public.consultores_de_riesgo_y_fomento(rut);


--
-- TOC entry 3277 (class 2606 OID 34023)
-- Name: tiene tiene_fk_1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tiene
    ADD CONSTRAINT tiene_fk_1 FOREIGN KEY (id_especialidad) REFERENCES public.especialidades(id_especialidades);


--
-- TOC entry 3272 (class 2606 OID 33946)
-- Name: trabajador trabajador_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.trabajador
    ADD CONSTRAINT trabajador_fk FOREIGN KEY (rut) REFERENCES public.personal(rut);


--
-- TOC entry 3268 (class 2606 OID 33999)
-- Name: trabajan trabajan_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.trabajan
    ADD CONSTRAINT trabajan_fk FOREIGN KEY (rut) REFERENCES public.consultores_de_riesgo_y_fomento(rut);


--
-- TOC entry 3269 (class 2606 OID 33866)
-- Name: usuario usuario_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_fk FOREIGN KEY (rut) REFERENCES public.personal(rut);


-- Completed on 2022-12-10 16:14:08

--
-- PostgreSQL database dump complete
--

