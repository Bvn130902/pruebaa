use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNombreDeLaTablaTable extends Migration
{
    public function up()
    {
        Schema::create('nombre_de_la_tabla', function (Blueprint $table) {
            $table->id(); // Crea una columna 'id' como clave primaria
            $table->string('nombre'); // Crea una columna 'nombre' de tipo string
            $table->text('descripcion')->nullable(); // Crea una columna 'descripcion' de tipo text
            $table->timestamps(); // Crea las columnas 'created_at' y 'updated_at'
        });
    }

    public function down()
    {
        Schema::dropIfExists('nombre_de_la_tabla');
    }
}
