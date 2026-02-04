<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Suscripciones</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #f4f4f4; }
        .alert { padding: 15px; background-color: #ffcccc; color: #a00; border: 1px solid #ebccd1; border-radius: 4px; }
    </style>
</head>
<body>

    <h1>Gestión de Suscripciones - Gimnasio</h1>

    <table>
        <thead>
            <tr>
                <th>Plan</th>
                <th>Costo Mensual</th>
                <th>Máximo de Días</th>
                <th>Vencimiento</th>
            </tr>
        </thead>
        <tbody>
            @forelse($suscripciones as $s)
                <tr>
                    <td><strong>{{ $s->plan }}</strong></td>
                    <td>${{ number_format($s->costo_mensual, 2) }}</td>
                    <td>{{ $s->maximo_dias }} días</td>
                    <td>{{ \Carbon\Carbon::parse($s->vencimiento)->format('d/m/Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">
                        <div class="alert">
                            No se encontraron registros en el sistema.
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>