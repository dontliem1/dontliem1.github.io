<?php
/**
 * Создание URL-ссылки из отформатированного номера телефона 
 *
 * @param string $tel Номер телефона
 *
 * @return string Строка формата tel:*
 */
function tel_url($tel) {
    return 'tel:'.str_replace([' ', '(', ')', '-'], '', str_replace('+', '%2B', $tel));
}