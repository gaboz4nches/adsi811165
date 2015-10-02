
# Linea de Comandos de mySql
# ==========================

# Abrir Terminal
# cd /Application/MAMP/Library/bin
# ./mysql -u root -p


# Crear base de datos
# =============================

# create database nombrebd;


# Seleccionar una base de datos
# =============================

# use nombrebd;


# Crear tabla
# =============================

# create table personas (
#   id int auto_increment,
#   firstname varchar(16),
#   lastname varchar(16),
#   phonenumber int(11),
#   city varchar(16),
#   primary key(id)
# );


# Mostrar tablas
# =============================

# show tables;


# Estructura de una tabla
# =============================

# describe nombretable;


# Insertar registros
# =============================

# insert into personas values (default, 'jeremias', 'springfield', 3110003111, 'springfield');
# insert into personas values (default, 'homero', 'simpson', 3110003111, 'springfield');
# insert into personas values (default, 'march', 'simpson', 3110003111, 'springfield');
# insert into personas values (default, 'liza', 'simpson', 3110003111, 'springfield');
# insert into personas values (default, 'barth', 'simpson', 3110003111, 'springfield');
