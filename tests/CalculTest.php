<?php

test('add must work correctly', function (): void {
	$obj = new Calcul();
	$obj->add(12, 6);
	expect((string) $obj)->toBe(18);

	$obj->sub(14, 4);
        expect((string) $obj)->toBe(10);
});
