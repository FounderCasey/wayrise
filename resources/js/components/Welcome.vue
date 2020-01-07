<template>
    <div id="welcome">
        <header class="column center">
            <div class="header-container">
                <h1>Gain full control of your customer conversations.</h1>
                <p>
                    Wayrise provides a decluttered and shared inbox to ensure
                    your customers are being taken care of and your team is
                    working effortlessly and smooth.
                </p>
            </div>
            <div class="cta-input flexbox">
                <input
                    type="email"
                    name="email-cta"
                    id="email-cta"
                    placeholder="Stay tuned"
                />
                <button type="submit"></button>
                <div class="spacer"></div>
            </div>
        </header>
        <div id="conquer">
            <h1>Conquer your workspace</h1>
            <div class="flexbox">
                <div class="card column center">
                    <img
                        src="/css/images/collab.png"
                        alt="Instant collaboration artwork"
                    />
                    <h2>Instant Collaboration</h2>
                    <p>
                        Wayrise offers instant collaboration between team
                        members to elminate a clustered workspace.
                    </p>
                </div>
                <div class="card column center">
                    <img
                        src="/css/images/shared.png"
                        alt="Shared Inboxes artwork"
                    />
                    <h2>Shared Inboxes</h2>
                    <p>
                        Wayrise ensures that your team has a platform for all of
                        your conversational channels.
                    </p>
                </div>
                <div class="card column center">
                    <img
                        src="/css/images/analytics.png"
                        alt="Analytics artwork"
                    />
                    <h2>Big Analytics</h2>
                    <p>
                        Wayrise keeps track of important data for you, helping
                        your team improve constantly.
                    </p>
                </div>
            </div>
            <div class="flexbox bottom">
                <div class="card column center">
                    <img src="/css/images/macros.png" alt="Macros artwork" />
                    <h2>Mighty Macros</h2>
                    <p>
                        Wayrise offers a wide set of macros and custom rules to
                        ensure your emails are handled with care.
                    </p>
                </div>
                <div class="card column center">
                    <img
                        src="/css/images/integrations.png"
                        alt="Integrations artwork"
                    />
                    <h2>Integrations</h2>
                    <p>
                        Do you need live chat support or social media support?
                        You’re covered with our integrations.
                    </p>
                </div>
            </div>
        </div>
        <div id="cta" class="column center">
            <div id="cta-container">
                <h1>Wayrise is on the way</h1>
                <p>
                    Be sure to opt-in to hearing more about the release. This is
                    not a newsletter, just a reminder for when
                    <strong>Wayrise</strong> becomes open to the public.
                </p>
            </div>
            <div class="cta-input flexbox">
                <input
                    type="email"
                    name="email-cta"
                    id="email-cta"
                    placeholder="Stay tuned"
                />
                <button type="submit"></button>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
#welcome {
    .spacer {
        height: 150px;
    }

    .cta-input {
        input[type="email"] {
            border: none;
            outline: none;
            border-radius: 13px;
            height: 50px;
            width: 300px;
            font-size: 1.3rem;
            text-indent: 10px;
            margin-right: 10px;
        }

        button {
            height: 50px;
            width: 50px;
            border: none;
            outline: none;
            background: #ff4949;
            background-image: url("/css/images/send.png");
            background-position: center;
            background-size: 60%;
            background-repeat: no-repeat;
            color: white;
            border-radius: 13px;
            transition: 0.2s;
        }

        button:hover {
            background: #76d1e5;
            background-image: url("/css/images/send.png");
            background-position: center;
            background-size: 60%;
            background-repeat: no-repeat;
        }
    }

    header {
        background-image: url("/css/images/HeaderBackground.png");
        background-position: center;
        background-repeat: no-repeat;
        padding: 40px 0;
        height: 540px;

        .header-container {
            width: 1030px;
            text-align: center;

            h1 {
                font-weight: 800;
                font-size: 3rem;
                width: 700px;
                margin: auto;
                margin-bottom: 30px;
            }

            p {
                font-weight: 500;
                font-size: 1.4rem;
                width: 700px;
                margin: auto;
                margin-bottom: 30px;
            }
        }
    }

    #conquer {
        text-align: center;

        .flexbox {
            margin-top: 57px;
        }

        .card {
            margin: 0 15px;

            img {
                width: auto;
                height: 150px;
            }

            p {
                font-size: 1.25rem;
            }

            &:first-of-type {
                margin-left: 0;
            }

            &:last-of-type {
                margin-right: 0;
            }
        }
    }

    #cta {
        background-image: url("/css/images/ctablob.png");
        background-size: 80%;
        background-position: center;
        background-repeat: no-repeat;
        height: 540px;

        #cta-container {
            width: 1030px;
            text-align: center;

            h1 {
                font-weight: 800;
                font-size: 3rem;
                width: 700px;
                margin: auto;
                margin-bottom: 30px;
            }

            p {
                font-weight: 500;
                font-size: 1.4rem;
                width: 700px;
                margin: auto;
                margin-bottom: 30px;
            }
        }
    }
}
</style>
