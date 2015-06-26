<?php namespace App\Faces;

use Form;

class Face {
	/**
	 * Build a deleting form with icon.
	 *
	 * @param  string  $entity
	 * @param  string  $id
	 * @param  boolean $confirm
	 * @param  array   $attributes
	 * @return DeleteForm
	 */
	public static function delete($entity, $id, $confirm, $attributes=[]) {
		if (isset($attributes['class'])) {
			$attributes['class'] .= ' fa fa-times js_delete';
		} else {
			$attributes['class'] = ' fa fa-times js_delete';
		}

		if ($confirm) {
			$attributes['data-confirm'] = 'Вы действительно хотите это сделать?';
		}

		$attr = static::attributes($attributes);

		$html = '';
		$html .= Form::open(['url' => l('delete_'.$entity), 'method' => 'POST', 'class'=>'js_delete_form', 'data-id'=>$id]);
		$html .= Form::hidden($entity.'_id', $id);
		$html .= "<i {$attr}></i>";
		$html .= Form::close();

		return $html;
	}	

	/**
	 * Build a changing form with icon.
	 *
	 * @param  string  $entity
	 * @param  string  $id
	 * @param  boolean $confirm
	 * @param  array   $attributes
	 * @return ChangeForm
	 */
	public static function change($entity, $id, $confirm, $attributes=[]) {
		if (isset($attributes['class'])) {
			$attributes['class'] .= ' fa fa-times js_delete';
		} else {
			$attributes['class'] = ' fa fa-times js_delete';
		}

		if ($confirm) {
			$attributes['data-confirm'] = 'Вы действительно хотите это сделать?';
		}

		$attr = static::attributes($attributes);

		$html = '';
		$html .= Form::open(['url' => l('delete_'.$entity), 'method' => 'POST', 'class'=>'js_delete_form', 'data-id'=>$id]);
		$html .= Form::hidden($entity.'_id', $id);
		$html .= "<i {$attr}></i>";
		$html .= Form::close();

		return $html;
	}	

	private static function attributes($attributes) {
		$html = array();

		// For numeric keys we will assume that the key and the value are the same
		// as this will convert HTML attributes such as "required" to a correct
		// form like required="required" instead of using incorrect numerics.
		foreach ((array) $attributes as $key => $value)
		{
			$element = static::attributeElement($key, $value);

			if ( ! is_null($element)) $html[] = $element;
		}

		return count($html) > 0 ? ' '.implode(' ', $html) : '';
	}

	private static function attributeElement($key, $value) {
		if (is_numeric($key)) $key = $value;

		if ( ! is_null($value)) return $key.'="'.e($value).'"';
	}
}