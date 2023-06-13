import React from 'react';
import Modal from '../Modal';
import SecondaryButton from '../Button/SecondaryButton'
import DangerButton from '../Button/DangerButton'
import TextInput from '../Input/TextInput';
import InputLabel from '../Input/InputLabel';
import InputError from '../Input/InputError';
import { useForm } from '@inertiajs/react';

export default function CancelSubscription({show, onCloseModal}) {
    const planInput = React.useRef();

    const {
        data,
        setData,
        delete: destroy,
        processing,
        reset,
        errors,
    } = useForm({
        plan: '',
    });

    const cancelSubscription = (e) => {
        e.preventDefault();
        console.log('cancelSubscription', data)
        // destroy(route('profile.destroy'), {
        //     preserveScroll: true,
        //     onSuccess: () => closeModal(),
        //     onError: () => plan.current.focus(),
        //     onFinish: () => reset(),
        // });
    };

    const closeModal = () => {
        onCloseModal();
        reset();
    };
 
    return (
        <Modal show={show}>
            <div className="rounded-md bg-white w-[600px] mt-10">
                <form onSubmit={cancelSubscription} className="p-6">
                    <h2 className="font-semibold text-[21px] text-gray-800 leading-tight">
                        Are you sure you want to cancel your subscription?
                    </h2>
                    <p className="mt-1 text-gray-600">
                        Once your subscription is cancelled, all of its resources and related data will be permanently deleted. Please
                        enter your current plan name to confirm you would like to cancel subscription.
                    </p>
                    <div className="mt-6">
                        <InputLabel htmlFor="password" value="Password" className="sr-only" />
                        <TextInput
                            id="plan"
                            name="plan"
                            ref={planInput}
                            value={data.plan}
                            onChange={(e) => setData('plan', e.target.value)}
                            className="mt-1 block w-3/4"
                            isFocused
                            placeholder="Plan Name"
                        />
                        <InputError message={errors.plan} className="mt-2" />
                    </div>
                    <div className="mt-6 flex justify-end">
                        <SecondaryButton onClick={closeModal}>
                            Never Mind
                        </SecondaryButton>
                        <DangerButton className="ml-3" disabled={processing}>
                            Delete Account
                        </DangerButton>
                    </div>
                </form>
            </div>
        </Modal>
  );
}
