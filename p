lapas:
 $table->id();
            $table->string('nama',50);
            $table->varchar('lokasi',500);
            $table->varchar('kapasitas',10000);

kriminal:
$table->id();
            $table->string('nama',50);
            $table->int ('usia',30);
            $table->varchar('kasus',1000);
            $table->varchar('lama hukuman',200);


polisi:
$table->id();
            $table->string('nama', 50);
            $table->int('usia', 50);
            $table->string('jabatan',50);

  