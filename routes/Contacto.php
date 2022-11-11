use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Model;

class Contacto extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable = [nombre,correo,mensaje];
}