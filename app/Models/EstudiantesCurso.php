<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstudiantesCurso
 * 
 * @property int $id_estudianteCur
 * @property int $id_estudiante
 * @property int $id_curso
 * 
 * @property Curso $curso
 * @property User $user
 *
 * @package App\Models
 */
class EstudiantesCurso extends Model
{
	protected $table = 'estudiantes_cursos';
	protected $primaryKey = 'id_estudianteCur';
	public $timestamps = false;

	protected $casts = [
		'id_estudiante' => 'int',
		'id_curso' => 'int'
	];

	protected $fillable = [
		'id_estudiante',
		'id_curso'
	];

	public function curso()
	{
		return $this->belongsTo(Curso::class, 'id_curso');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_estudiante');
	}
}
