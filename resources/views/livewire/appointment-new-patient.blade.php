<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card border-0 rounded-2xl shadow-sm container ps-none p-5">
                <div>
                    <h2 class="text-center">Llena el formulario</h2>
                    <br>
                    <div class="modal-body">
                        <div class="col-lg-9 m-auto">
                            <p class="m-1">Nombre</p>
                            <input wire:model="patient.name" class="form-control form-control-lg" type="text">
                            <br>
                            <p class="m-1">Fecha de nacimiento</p>
                            <input wire:model="patient.birth_date" type="date" class="form-control form-control-lg"
                                type="text">
                            <br>
                            <p class="m-1">Código de Estudiante</p>
                            <input wire:model="patient.code" class="form-control form-control-lg" type="text">
                            <br>
                            <p class="m-1">Sexo</p>
                            <select wire:model="patient.sex" class="form-control form-control-lg">
                                <option value="female">...
                                </option>
                                <option value="female">Mujer
                                </option>
                                <option value="male">Hombre
                                </option>
                                <option value="other">Otro
                                </option>
                            </select>
                            <br>
                            <p class="m-1">Estado Civil</p>
                            <select wire:model="patient.sex" class="form-control form-control-lg">
                                <option value="female">...
                                </option>
                                <option value="female">Mujer
                                </option>
                                <option value="male">Hombre
                                </option>
                                <option value="other">Otro
                                </option>
                            </select>
                            <br>
                            <p class="m-1">Email Institucional</p>
                            <input wire:model="patient.email" class="form-control form-control-lg" type="text">
                            <br>
                            <p class="m-1">Teléfono</p>
                            <input wire:model="patient.phone" class="form-control form-control-lg" type="text">
                            <br>
                            {{--  --}}
                            <p class="m-1">¿Cual es tu carrera?</p>
                            <select wire:model="patient.sex" class="form-control form-control-lg">
                                <option value="female">...
                                </option>
                                <option value="female">Mujer
                                </option>
                                <option value="male">Hombre
                                </option>
                                <option value="other">Otro
                                </option>
                            </select>
                            <br>
                            <p class="m-1">¿Su semestre actual de estudio?</p>
                            <select wire:model="patient.sex" class="form-control form-control-lg">
                                <option value="female">...
                                </option>
                                <option value="female">Mujer
                                </option>
                                <option value="male">Hombre
                                </option>
                                <option value="other">Otro
                                </option>
                            </select>
                            <br>
                            <p class="m-1">¿Su promedio actual?</p>
                            <select wire:model="patient.sex" class="form-control form-control-lg">
                                <option value="female">...
                                </option>
                                <option value="female">Mujer
                                </option>
                                <option value="male">Hombre
                                </option>
                                <option value="other">Otro
                                </option>
                            </select>
                            <br>
                            {{--  --}}
                            <p class="m-1">¿Tienes depresión?</p>
                            <select wire:model="patient.sex" class="form-control form-control-lg">
                                <option value="female">...
                                </option>
                                <option value="female">Mujer
                                </option>
                                <option value="male">Hombre
                                </option>
                                <option value="other">Otro
                                </option>
                            </select>
                            <br>
                            <p class="m-1">¿Tienes ansiedad?</p>
                            <select wire:model="patient.sex" class="form-control form-control-lg">
                                <option value="female">...
                                </option>
                                <option value="female">Mujer
                                </option>
                                <option value="male">Hombre
                                </option>
                                <option value="other">Otro
                                </option>
                            </select>
                            <br>
                            <p class="m-1">¿Tienes ataque de pánico?</p>
                            <select wire:model="patient.sex" class="form-control form-control-lg">
                                <option value="female">...
                                </option>
                                <option value="female">Mujer
                                </option>
                                <option value="male">Hombre
                                </option>
                                <option value="other">Otro
                                </option>
                            </select>
                            <br>
                            <p class="m-1">¿Buscaste algún especialista para un tratamiento?</p>
                            <select wire:model="patient.sex" class="form-control form-control-lg">
                                <option value="female">...
                                </option>
                                <option value="female">Mujer
                                </option>
                                <option value="male">Hombre
                                </option>
                                <option value="other">Otro
                                </option>
                            </select>
                            <br>
                            @if ($errors->any())
                                <div class="my-3">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-lg btn-primary">Guardar datos</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
