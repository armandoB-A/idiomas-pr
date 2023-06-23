<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Curso
 * 
 * @property int $id_curso
 * @property string $nombre_curso
 * 
 * @property Collection|EstudiantesCurso[] $estudiantes_cursos
 *
 * @package App\Models
 */
class Curso extends Model
{
	protected $table = 'curso';
	protected $primaryKey = 'id_curso';
	public $timestamps = false;

	protected $fillable = [
		'nombre_curso'
	];

	public function estudiantes_cursos()
	{
		return $this->hasMany(EstudiantesCurso::class, 'id_curso');
	}
}
